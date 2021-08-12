<?php

namespace App\Admin\Controllers;

use App\Models\Customer;
use App\Models\CustomerContact;
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
            $this->basic($form);
        });
    }

    private function basic(Form $form)
    {
        $form->block(7, function (Form\BlockForm $form) {
            $form->title('基础信息');

            $form->row(function (Form\Row $form) {
                $form->width(6)->text('no');
                $form->width(6)->text('po');
                $form->width(4)->select('customer_id')
                    ->options(function ($id) {
                        $customer = Customer::find($id);

                        if ($customer) {
                            return [$customer->id => $customer->name];
                        }
                    })
                    ->ajax('api/customers')
                    ->load('customer_contact_id', 'api/customers/contacts');
                $form->width(4)->select('customer_contact_id')
                    ->options(function ($id) {
                        $customerContact = CustomerContact::find($id);

                        if ($customerContact) {
                            return [$customerContact->id => $customerContact->name];
                        }
                    });
                $form->width(4)->text('company');
                $form->width(4)->text('salesman_id');
                $form->width(4)->text('merchandiser_id');
                $form->width(4)->text('purchaser_id');
                $form->width(6)->text('pol');
                $form->width(6)->text('pod');
                $form->width(6)->text('valuation_clause');
                $form->width(12)->textarea('remarks');
            });
        });

        $form->block(5, function (Form\BlockForm $form) {

            $form->row(function (Form\Row $form) {
                $form->width(6)->text('currency');
                $form->width(6)->text('exchange_rate');
                $form->width(6)->text('sea_freight');
                $form->width(6)->text('commission');
                $form->width(6)->text('rebate');
                $form->width(6)->text('profit_margin');
                $form->width(6)->text('actual_total_amount');
                $form->width(6)->text('total_amount');
                $form->width(6)->datetime('delivered_at');
                $form->width(6)->radio('processing_status')
                    ->options(Quote::$processingStatusMap);
            });

            // 显示底部提交按钮
            $form->showFooter();
        });
    }
}
