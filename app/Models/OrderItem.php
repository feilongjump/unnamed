<?php

namespace App\Models;

class OrderItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'manufacturer_id', 'po_no', 'no', 'customer_no', 'name', 'english_name', 'brand',
        'packing_method', 'inner', 'intermediate', 'outer', 'composition_mode', 'quantity', 'quote_unit',
        'unit_price', 'profit_margin', 'factory_quoted', 'tax_rebate_rate', 'tax_rate', 'price_excluding_tax',
        'place_of_delivery', 'material_quality', 'fob', 'fob_cost', 'fob_fee', 'quotation_benchmark',
        'product_factory_price', 'direct_cost', 'component_cost', 'packaging_cost', 'other_cost', 'sea_freight',
        'commission', 'product_cbm', 'cbm_box', 'net_weight', 'net_weight_box', 'gross_weight',
        'gross_weight_box', 'weight', 'unit_of_weight', 'moq', 'factory_delivery_time', 'customer_delivery_time',
    ];

    protected $dates = [
        'factory_delivery_time',
        'customer_delivery_time',
    ];
}
