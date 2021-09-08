<?php

namespace App\Admin\Controllers;

use App\Models\Customer;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class CustomersController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(Customer::with(['defaultContact']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('category');
            $grid->column('salesman_id');
            $grid->column('merchandiser_id');
            $grid->column('grade')->sortable()->filter(
                Grid\Column\Filter\In::make([
                    '1' => '⭐',
                    '2' => '⭐⭐',
                    '3' => '⭐⭐⭐',
                    '4' => '⭐⭐⭐⭐',
                    '5' => '⭐⭐⭐⭐⭐',
                ])
            );
            $grid->column('currency');
            $grid->column('payment_method');

            $grid->column('defaultContact.name');
            $grid->column('defaultContact.telephone');
            $grid->column('defaultContact.email');
            $grid->column('defaultContact.fax');

            $grid->column('created_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('name')->width(3);
                $filter->equal('salesman_id')->select([1 => '小菜鸟'])->width(3);

                $filter->between('created_at')->datetime()->width(4);
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(): Form
    {
        return Form::make(Customer::with(['contacts', 'banks']), function (Form $form) {
            if ($form->isEditing()) {

                $form->tab('客户信息', function (Form $form) {

                    $form->display('id');

                    $this->basic($form);

                    $form->display('created_at');
                    $form->display('updated_at');
                })->tab('联系人信息', function (Form $form) {

                    $this->contacts($form);

                })->tab('银行卡信息', function (Form $form) {

                    $this->banks($form);
                });

                return;
            }

            $form->multipleSteps()
                ->add('客户信息', function ($step) {
                    $this->basic($step);
                })
                ->add('联系人信息', function ($step) {

                    $this->contacts($step);

                })
                ->add('银行卡信息', function ($step) {

                    $this->banks($step);

                })
                ->width('100%')
                ->done();
        });
    }

    /**
     * 基本信息
     *
     * @param $form
     */
    private function basic($form)
    {
        $form->text('name')->required();
        $form->select('category')
            ->options([1 => '测试分类'])
            ->required();
        $form->select('salesman_id')
            ->options([1 => '小菜鸟业务员'])
            ->required();
        $form->select('merchandiser_id')
            ->options([1 => '小菜鸟跟单员'])
            ->required();
        $form->text('grade');
        $form->text('currency');
        $form->text('payment_method');
        $form->text('address')->required();
        $form->textarea('remarks')->rows(10);
    }

    /**
     * 联系人表单
     *
     * @param $form
     */
    private function contacts($form)
    {
        $form->hasMany('contacts', '', function (Form\NestedForm $form) {

            // TODO: 等待此回复 https://github.com/jqhph/dcat-admin/issues/1417
            // 关联时需要自动翻译，使用以下模式
            // $form->text('contacts.name')->required();
            // 同时在主翻译文件中，增加翻译字段 https://github.com/jqhph/dcat-admin/issues/229
            $form->text('name')->required();
            $form->text('telephone')->required();
            $form->email('email')->required();
            $form->text('fax')->required();
            $form->switch('is_default')->default(false)->rules(function (Form $form) {

                $quantity = collect($form->contacts)
                    ->pluck('is_default')
                    ->filter(function ($value, $key) {
                        return $value > 0;
                    })
                    ->count();
                if ($quantity > 1) {
                    $form->responseValidationMessages('is_default', '请勿设置多个默认联系人');
                }
            });
        })->useTable()->width(12);
    }

    /**
     * 银行信息表单
     *
     * @param $form
     */
    private function banks($form)
    {
        $form->hasMany('banks', '', function (Form\NestedForm $form) {

            $form->text('name')->required();
            $form->text('currency')->required();
            $form->text('account_name')->required();
            $form->text('account_number')->required();
            $form->text('account_bank')->required();
            $form->text('bank_address')->required();
            $form->text('company_address')->required();

        })->useTable()->width(12);
    }
}
