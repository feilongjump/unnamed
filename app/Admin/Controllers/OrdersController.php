<?php

namespace App\Admin\Controllers;

use App\Models\Picture;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use App\Models\Order;
use App\Models\Customer;
use App\Models\CustomerContact;
use Dcat\Admin\Http\Controllers\AdminController;

class OrdersController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Order(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('customer_id');
            $grid->column('customer_contact_id');
            $grid->column('company');
            $grid->column('salesman_id');
            $grid->column('merchandiser_id');
            $grid->column('purchaser_id');
            $grid->column('no');
            $grid->column('po');
            $grid->column('currency');
            $grid->column('exchange_rate');
            $grid->column('commission');
            $grid->column('rebate');
            $grid->column('sea_freight');
            $grid->column('profit_margin');
            $grid->column('total_amount');
            $grid->column('actual_total_amount');
            $grid->column('pol');
            $grid->column('pod');
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
        return Form::make(Order::with(['items', 'parts', 'packages', 'mark', 'pictures']), function (Form $form) {
            $this->basic($form);

            $this->items($form);

            $this->parts($form);

            $this->packages($form);

            $this->mark($form);

            $this->pictures($form);
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
                    ->options(Order::$processingStatusMap);
            });

            // 显示底部提交按钮
            $form->showFooter();
        });
    }

    private function items(Form $form)
    {
        $form->block(12, function (Form\BlockForm $form) {
            $form->hasMany('items', '', function (Form\NestedForm $form) {

                $form->text('manufacturer_id');
                $form->text('no');
                $form->text('customer_no');
                $form->text('po_no');
                $form->text('name');
                $form->text('english_name');
                $form->text('brand');
                $form->text('packing_method');
                $form->text('inner');
                $form->text('intermediate');
                $form->text('outer');
                $form->text('composition_mode');
                $form->text('quantity');
                $form->text('quote_unit');
                $form->text('unit_price');
                $form->text('profit_margin');
                $form->text('factory_quoted');
                $form->text('tax_rebate_rate');
                $form->text('tax_rate');
                $form->text('price_excluding_tax');
                $form->text('place_of_delivery');
                $form->text('material_quality');
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
                $form->text('net_weight');
                $form->text('net_weight_box');
                $form->text('gross_weight');
                $form->text('gross_weight_box');
                $form->text('weight');
                $form->text('unit_of_weight');
                $form->text('moq');
                $form->text('factory_delivery_time');
                $form->text('customer_delivery_time');
            })->useTable()->width(12);
        });
    }

    private function parts(Form $form)
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

    private function packages(Form $form)
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

    private function mark(Form $form)
    {
        $form->block(12, function (Form\BlockForm $form) {

            $form->row(function (Form\Row $form) {

                $form->width(6)
                    ->textarea('mark.front.text', admin_trans('orders.fields.marks.front'))
                    ->rows(7);
                $form->width(6)->multipleImage('mark.front.images', '');
            });

            $form->row(function (Form\Row $form) {

                $form->width(6)
                    ->textarea('mark.side.text', admin_trans('orders.fields.marks.side'))
                    ->rows(7);
                $form->width(6)->multipleImage('mark.side.images', '');
            });

            $form->row(function (Form\Row $form) {

                $form->width(6)
                    ->textarea('mark.inner_box.text', admin_trans('orders.fields.marks.inner_box'))
                    ->rows(7);
                $form->width(6)->multipleImage('mark.inner_box.images', '');
            });
        });
    }

    /**
     * 配件明细
     *
     * @param $form
     */
    private function pictures($form)
    {
        $form->block(12, function (Form\BlockForm $form) {
            $form->hasMany('pictures', '', function (Form\NestedForm $form) {

                $form->text('name');
                $form->image('path');

                $form->hidden('type')->value(Picture::ORDER);

            })->useTable()->width(12);
        });
    }
}
