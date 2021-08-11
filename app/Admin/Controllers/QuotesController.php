<?php

namespace App\Admin\Controllers;

use App\Models\Quote;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class QuotesController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Quote(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('customer_id');
            $grid->column('customer_contact_id');
            $grid->column('no');
            $grid->column('company');
            $grid->column('salesman_id');
            $grid->column('merchandiser_id');
            $grid->column('purchaser_id');
            $grid->column('po');
            $grid->column('profit_margin');
            $grid->column('total_amount');
            $grid->column('currency');
            $grid->column('exchange_rate');
            $grid->column('commission');
            $grid->column('rebate');
            $grid->column('sea_freight');
            $grid->column('actual_total_amount');
            $grid->column('pol');
            $grid->column('pod');
            $grid->column('valuation_clause');
            $grid->column('remarks');
            $grid->column('delivered_at');
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
        return Form::make(new Quote(), function (Form $form) {
            $form->display('id');
            $form->text('customer_id');
            $form->text('customer_contact_id');
            $form->text('no');
            $form->text('company');
            $form->text('salesman_id');
            $form->text('merchandiser_id');
            $form->text('purchaser_id');
            $form->text('po');
            $form->text('profit_margin');
            $form->text('total_amount');
            $form->text('currency');
            $form->text('exchange_rate');
            $form->text('commission');
            $form->text('rebate');
            $form->text('sea_freight');
            $form->text('actual_total_amount');
            $form->text('pol');
            $form->text('pod');
            $form->text('valuation_clause');
            $form->text('remarks');
            $form->text('delivered_at');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
