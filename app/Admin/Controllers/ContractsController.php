<?php

namespace App\Admin\Controllers;

use App\Models\Contract;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ContractsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Contract(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('manufacturer_id');
            $grid->column('manufacturer_contact_id');
            $grid->column('company');
            $grid->column('merchandiser_id');
            $grid->column('purchaser_id');
            $grid->column('purchaser_no');
            $grid->column('currency');
            $grid->column('total_amount');
            $grid->column('valuation_clause');
            $grid->column('processing_status');
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

        return Form::make(Contract::with(['items']), function (Form $form) {

            $this->basic($form);

            $this->items($form);
        });
    }

    private function basic(Form $form)
    {
        $form->block(12, function (Form\BlockForm $form) {
            $form->title('基础信息');
            $form->display('id');

            $form->text('manufacturer_id');
            $form->text('manufacturer_contact_id');
            $form->text('company');
            $form->text('merchandiser_id');
            $form->text('purchaser_id');
            $form->text('order_no');
            $form->text('purchaser_no');
            $form->text('currency');
            $form->text('exchange_rate');
            $form->text('total_amount');
            $form->text('valuation_clause');
            $form->text('payment_account');
            $form->text('purchase_method');
            $form->text('invoice_type');
            $form->text('contract_type');
            $form->text('processing_status');
            $form->text('remarks');
            $form->text('delivered_at');
            $form->text('purchased_at');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }

    private function items(Form $form)
    {
        $form->block(12, function (Form\BlockForm $form) {
            $form->hasMany('items', '', function (Form\NestedForm $form) {

                $form->text('art_no');
                $form->text('no');
                $form->text('name');
                $form->text('spec');
                $form->text('quantity');
                $form->text('unit_price');
                $form->text('amount');
                $form->text('is_tax_included');
                $form->text('tax_rate');
                $form->text('price_excluding_tax');
                $form->text('remarks');

            })->useTable()->width(12);
        });
    }
}
