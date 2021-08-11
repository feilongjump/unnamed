<?php

namespace App\Admin\Controllers;

use App\Models\Manufacturer;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class ManufacturersController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Manufacturer(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('no');
            $grid->column('name');
            $grid->column('category');
            $grid->column('purchaser');
            $grid->column('address');
            $grid->column('remarks');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

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
        return Form::make(Manufacturer::with(['contacts', 'banks']), function (Form $form) {
            if ($form->isEditing()) {

                $form->tab('厂家信息', function (Form $form) {

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
                ->add('厂家信息', function ($step) {
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
        $form->text('no')->required();
        $form->text('name')->required();
        $form->select('category')
            ->options([1 => '测试分类'])
            ->required();
        $form->select('purchaser')
            ->options([1 => '小菜鸟'])
            ->required();
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
            $form->switch('is_default')->default(false);
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
