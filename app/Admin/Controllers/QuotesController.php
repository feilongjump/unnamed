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
        return Form::make(Quote::with(['items', 'parts', 'packages']), function (Form $form) {
            $this->basic($form);

            $this->items($form);

            $this->parts($form);

            $this->packages($form);
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
                $form->width(4)->text('pol');
                $form->width(4)->text('pod');
                $form->width(4)->text('valuation_clause');
                $form->width()->textarea('remarks')->rows(6);
            });
        });

        $form->block(5, function (Form\BlockForm $form) {
            $form->title('金额');

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
                $form->width(6)->datetime('created_at');
                $form->width(6)->radio('processing_status')
                    ->options(Quote::$processingStatusMap);
            });

            // 显示底部提交按钮
            $form->showFooter();
        });
    }

    public function items(Form $form)
    {
        $form->block(12, function (Form\BlockForm $form) {
            $form->hasMany('items', '', function (Form\NestedForm $form) {

                $form->text('manufacturer_id')->width('600px');
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
            })->useTable()->width(12);
        });
    }

    public function parts(Form $form)
    {
        $form->block(12, function (Form\BlockForm $form) {
            $form->hasMany('parts', '配件列表', function (Form\NestedForm $form) {
                $form->text('manufacturer_id');
                $form->text('no');
                $form->text('name');
                $form->text('spec');
                $form->text('rate');
                $form->text('quantity');
                $form->text('unit_price');
                $form->text('amount');
                $form->text('remarks');
            })->useTable()->width(12);
        });
    }

    public function packages(Form $form)
    {
        $form->block(12, function (Form\BlockForm $form) {

            $form->hasMany('parts', '包材列表', function (Form\NestedForm $form) {
                $form->text('manufacturer_id');
                $form->text('no');
                $form->text('name');
                $form->text('spec');
                $form->text('rate');
                $form->text('quantity');
                $form->text('unit_price');
                $form->text('remarks');
            })->useTable()->width(12);
        });
    }
}
