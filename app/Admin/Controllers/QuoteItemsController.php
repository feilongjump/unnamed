<?php

namespace App\Admin\Controllers;

use App\Models\QuoteItem;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class QuoteItemsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new QuoteItem(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('manufacturer_id');
            $grid->column('no');
            $grid->column('customer_no');
            $grid->column('packing_method');
            $grid->column('inner');
            $grid->column('intermediate');
            $grid->column('outer');
            $grid->column('composition_mode');
            $grid->column('quantity');
            $grid->column('quote_unit');
            $grid->column('unit_price');
            $grid->column('profit_margin');
            $grid->column('fob');
            $grid->column('fob_cost');
            $grid->column('fob_fee');
            $grid->column('quotation_benchmark');
            $grid->column('product_factory_price');
            $grid->column('direct_cost');
            $grid->column('component_cost');
            $grid->column('packaging_cost');
            $grid->column('other_cost');
            $grid->column('sea_freight');
            $grid->column('commission');
            $grid->column('product_cbm');
            $grid->column('cbm_box');
            $grid->column('moq');
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
        return Show::make($id, new QuoteItem(), function (Show $show) {
            $show->field('id');
            $show->field('manufacturer_id');
            $show->field('no');
            $show->field('customer_no');
            $show->field('packing_method');
            $show->field('inner');
            $show->field('intermediate');
            $show->field('outer');
            $show->field('composition_mode');
            $show->field('quantity');
            $show->field('quote_unit');
            $show->field('unit_price');
            $show->field('profit_margin');
            $show->field('fob');
            $show->field('fob_cost');
            $show->field('fob_fee');
            $show->field('quotation_benchmark');
            $show->field('product_factory_price');
            $show->field('direct_cost');
            $show->field('component_cost');
            $show->field('packaging_cost');
            $show->field('other_cost');
            $show->field('sea_freight');
            $show->field('commission');
            $show->field('product_cbm');
            $show->field('cbm_box');
            $show->field('moq');
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
        return Form::make(new QuoteItem(), function (Form $form) {
            $form->display('id');
            $form->text('manufacturer_id');
            $form->text('no');
            $form->text('customer_no');
            $form->text('packing_method');
            $form->text('inner');
            $form->text('intermediate');
            $form->text('outer');
            $form->text('composition_mode');
            $form->text('quantity');
            $form->text('quote_unit');
            $form->text('unit_price');
            $form->text('profit_margin');
            $form->text('fob');
            $form->text('fob_cost');
            $form->text('fob_fee');
            $form->text('quotation_benchmark');
            $form->text('product_factory_price');
            $form->text('direct_cost');
            $form->text('component_cost');
            $form->text('packaging_cost');
            $form->text('other_cost');
            $form->text('sea_freight');
            $form->text('commission');
            $form->text('product_cbm');
            $form->text('cbm_box');
            $form->text('moq');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
