<?php

namespace App\Admin\Controllers;

use App\Models\OrderPart;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class OrderPartController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new OrderPart(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('order_id');
            $grid->column('manufacturer_id');
            $grid->column('no');
            $grid->column('name');
            $grid->column('spec');
            $grid->column('rate');
            $grid->column('quantity');
            $grid->column('unit_price');
            $grid->column('amount');
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
        return Show::make($id, new OrderPart(), function (Show $show) {
            $show->field('id');
            $show->field('order_id');
            $show->field('manufacturer_id');
            $show->field('no');
            $show->field('name');
            $show->field('spec');
            $show->field('rate');
            $show->field('quantity');
            $show->field('unit_price');
            $show->field('amount');
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
        return Form::make(new OrderPart(), function (Form $form) {
            $form->display('id');
            $form->text('order_id');
            $form->text('manufacturer_id');
            $form->text('no');
            $form->text('name');
            $form->text('spec');
            $form->text('rate');
            $form->text('quantity');
            $form->text('unit_price');
            $form->text('amount');
            $form->text('remarks');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
