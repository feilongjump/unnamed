<?php

namespace App\Admin\Controllers;

use App\Models\Manufacturer;
use App\Models\Material;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class MaterialsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Material(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('manufacturer_id');
            $grid->column('code');
            $grid->column('name');
            $grid->column('spec');
            $grid->column('category');
            $grid->column('unit');
            $grid->column('unit_price');
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
        return Form::make(new Material(), function (Form $form) {
            $form->display('id');

            $form->select('manufacturer_id')
                ->ajax('api/manufacturers')
                ->required();
            $form->text('code')->required();
            $form->text('name')->required();
            $form->text('spec');
            $form->text('category')
                ->options([1 => '测试分类'])
                ->required();
            $form->text('unit');
            $form->text('unit_price');
            $form->text('remarks');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
