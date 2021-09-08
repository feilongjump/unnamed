<?php

namespace App\Admin\Controllers;

use App\Models\Material;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
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
        return Grid::make(Material::with('manufacturer'), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('manufacturer.name');
            $grid->column('no');
            $grid->column('name');
            $grid->column('spec');
            $grid->column('category');
            $grid->column('unit');
            $grid->column('unit_price');
            $grid->column('remarks')->limit(30)->width('300px');
            $grid->column('created_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('no')->width(3);
                $filter->equal('category')->select([1 => '测试分类'])->width(3);

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
        return Form::make(new Material(), function (Form $form) {
            $form->display('id');

            $form->select('manufacturer_id')
                ->ajax('api/manufacturers')
                ->required();
            $form->text('no')->required();
            $form->text('name')->required();
            $form->text('spec');
            $form->text('category')
                ->options([1 => '测试分类'])
                ->required();
            $form->text('unit');
            $form->text('unit_price');
            $form->textarea('remarks')->rows(10);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
