<?php

namespace App\Admin\Controllers;

use App\Models\Manufacturer;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class ManufacturersController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Manufacturer(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('code');
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
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Manufacturer(), function (Show $show) {
            $show->field('id');
            $show->field('code');
            $show->field('name');
            $show->field('category');
            $show->field('purchaser');
            $show->field('address');
            $show->field('remarks');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Manufacturer(), function (Form $form) {
            $form->tab('厂家信息', function (Form $form) {
                $form->display('id');
                $form->text('code')->required();
                $form->text('name')->required();
                $form->select('category')
                    ->options([1 => '测试分类'])
                    ->required();
                $form->select('purchaser')
                    ->options([1 => '小菜鸟'])
                    ->required();
                $form->text('address')->required();
                $form->textarea('remarks')->rows(10);

                $form->display('created_at');
                $form->display('updated_at');
            })->tab('联系人信息', function (Form $form) {

                $form->hasMany('contacts', '', function (Form\NestedForm $form) {

                    $form->text('name')->required();
                    $form->text('telephone')->required();
                    $form->email('email')->required();
                    $form->text('fax')->required();
                    $form->checkbox('is_default')
                        ->options([1 => '是'])
                        ->required();

                    $form->display('created_at');
                    $form->display('updated_at');
                })->useTable()->width(12);

            })->tab('银行卡信息', function (Form $form) {

                $form->hasMany('banks', '', function (Form\NestedForm $form) {

                    $form->text('name')->required();
                    $form->text('currency')->required();
                    $form->text('account_name')->required();
                    $form->text('account_number')->required();
                    $form->text('account_bank')->required();
                    $form->text('bank_address')->required();
                    $form->text('company_address')->required();

                })->useTable()->width(12);

            });
        });
    }
}
