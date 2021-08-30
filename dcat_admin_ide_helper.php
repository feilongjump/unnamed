<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection art_no
     * @property Grid\Column|Collection contract_id
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection is_tax_included
     * @property Grid\Column|Collection no
     * @property Grid\Column|Collection price_excluding_tax
     * @property Grid\Column|Collection quantity
     * @property Grid\Column|Collection remarks
     * @property Grid\Column|Collection spec
     * @property Grid\Column|Collection tax_rate
     * @property Grid\Column|Collection unit_price
     * @property Grid\Column|Collection company
     * @property Grid\Column|Collection contract_type
     * @property Grid\Column|Collection currency
     * @property Grid\Column|Collection delivered_at
     * @property Grid\Column|Collection exchange_rate
     * @property Grid\Column|Collection invoice_type
     * @property Grid\Column|Collection manufacturer_contact_id
     * @property Grid\Column|Collection manufacturer_id
     * @property Grid\Column|Collection merchandiser_id
     * @property Grid\Column|Collection order_no
     * @property Grid\Column|Collection payment_account
     * @property Grid\Column|Collection processing_status
     * @property Grid\Column|Collection purchase_method
     * @property Grid\Column|Collection purchased_at
     * @property Grid\Column|Collection purchaser_id
     * @property Grid\Column|Collection purchaser_no
     * @property Grid\Column|Collection total_amount
     * @property Grid\Column|Collection valuation_clause
     * @property Grid\Column|Collection account_bank
     * @property Grid\Column|Collection account_name
     * @property Grid\Column|Collection account_number
     * @property Grid\Column|Collection bank_address
     * @property Grid\Column|Collection company_address
     * @property Grid\Column|Collection customer_id
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection fax
     * @property Grid\Column|Collection is_default
     * @property Grid\Column|Collection telephone
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection category
     * @property Grid\Column|Collection grade
     * @property Grid\Column|Collection payment_method
     * @property Grid\Column|Collection salesman_id
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection unit
     * @property Grid\Column|Collection brand
     * @property Grid\Column|Collection cbm_box
     * @property Grid\Column|Collection commission
     * @property Grid\Column|Collection component_cost
     * @property Grid\Column|Collection composition_mode
     * @property Grid\Column|Collection customer_delivery_time
     * @property Grid\Column|Collection customer_no
     * @property Grid\Column|Collection direct_cost
     * @property Grid\Column|Collection english_name
     * @property Grid\Column|Collection factory_delivery_time
     * @property Grid\Column|Collection factory_quoted
     * @property Grid\Column|Collection fob
     * @property Grid\Column|Collection fob_cost
     * @property Grid\Column|Collection fob_fee
     * @property Grid\Column|Collection gross_weight
     * @property Grid\Column|Collection gross_weight_box
     * @property Grid\Column|Collection inner
     * @property Grid\Column|Collection intermediate
     * @property Grid\Column|Collection material_quality
     * @property Grid\Column|Collection moq
     * @property Grid\Column|Collection net_weight
     * @property Grid\Column|Collection net_weight_box
     * @property Grid\Column|Collection order_id
     * @property Grid\Column|Collection other_cost
     * @property Grid\Column|Collection outer
     * @property Grid\Column|Collection packaging_cost
     * @property Grid\Column|Collection packing_method
     * @property Grid\Column|Collection place_of_delivery
     * @property Grid\Column|Collection po_no
     * @property Grid\Column|Collection product_cbm
     * @property Grid\Column|Collection product_factory_price
     * @property Grid\Column|Collection profit_margin
     * @property Grid\Column|Collection quotation_benchmark
     * @property Grid\Column|Collection quote_unit
     * @property Grid\Column|Collection sea_freight
     * @property Grid\Column|Collection tax_rebate_rate
     * @property Grid\Column|Collection unit_of_weight
     * @property Grid\Column|Collection weight
     * @property Grid\Column|Collection front
     * @property Grid\Column|Collection inner_box
     * @property Grid\Column|Collection side
     * @property Grid\Column|Collection rate
     * @property Grid\Column|Collection actual_total_amount
     * @property Grid\Column|Collection customer_contact_id
     * @property Grid\Column|Collection po
     * @property Grid\Column|Collection pod
     * @property Grid\Column|Collection pol
     * @property Grid\Column|Collection rebate
     * @property Grid\Column|Collection cbm
     * @property Grid\Column|Collection cost_price
     * @property Grid\Column|Collection price_formula
     * @property Grid\Column|Collection showpiece_id
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection relevance_id
     * @property Grid\Column|Collection quote_id
     * @property Grid\Column|Collection describe
     * @property Grid\Column|Collection english_describe
     * @property Grid\Column|Collection english_pack_describe
     * @property Grid\Column|Collection material
     * @property Grid\Column|Collection mo
     * @property Grid\Column|Collection pack_describe
     * @property Grid\Column|Collection quoted_price
     * @property Grid\Column|Collection series
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection art_no(string $label = null)
     * @method Grid\Column|Collection contract_id(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection is_tax_included(string $label = null)
     * @method Grid\Column|Collection no(string $label = null)
     * @method Grid\Column|Collection price_excluding_tax(string $label = null)
     * @method Grid\Column|Collection quantity(string $label = null)
     * @method Grid\Column|Collection remarks(string $label = null)
     * @method Grid\Column|Collection spec(string $label = null)
     * @method Grid\Column|Collection tax_rate(string $label = null)
     * @method Grid\Column|Collection unit_price(string $label = null)
     * @method Grid\Column|Collection company(string $label = null)
     * @method Grid\Column|Collection contract_type(string $label = null)
     * @method Grid\Column|Collection currency(string $label = null)
     * @method Grid\Column|Collection delivered_at(string $label = null)
     * @method Grid\Column|Collection exchange_rate(string $label = null)
     * @method Grid\Column|Collection invoice_type(string $label = null)
     * @method Grid\Column|Collection manufacturer_contact_id(string $label = null)
     * @method Grid\Column|Collection manufacturer_id(string $label = null)
     * @method Grid\Column|Collection merchandiser_id(string $label = null)
     * @method Grid\Column|Collection order_no(string $label = null)
     * @method Grid\Column|Collection payment_account(string $label = null)
     * @method Grid\Column|Collection processing_status(string $label = null)
     * @method Grid\Column|Collection purchase_method(string $label = null)
     * @method Grid\Column|Collection purchased_at(string $label = null)
     * @method Grid\Column|Collection purchaser_id(string $label = null)
     * @method Grid\Column|Collection purchaser_no(string $label = null)
     * @method Grid\Column|Collection total_amount(string $label = null)
     * @method Grid\Column|Collection valuation_clause(string $label = null)
     * @method Grid\Column|Collection account_bank(string $label = null)
     * @method Grid\Column|Collection account_name(string $label = null)
     * @method Grid\Column|Collection account_number(string $label = null)
     * @method Grid\Column|Collection bank_address(string $label = null)
     * @method Grid\Column|Collection company_address(string $label = null)
     * @method Grid\Column|Collection customer_id(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection fax(string $label = null)
     * @method Grid\Column|Collection is_default(string $label = null)
     * @method Grid\Column|Collection telephone(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection category(string $label = null)
     * @method Grid\Column|Collection grade(string $label = null)
     * @method Grid\Column|Collection payment_method(string $label = null)
     * @method Grid\Column|Collection salesman_id(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection unit(string $label = null)
     * @method Grid\Column|Collection brand(string $label = null)
     * @method Grid\Column|Collection cbm_box(string $label = null)
     * @method Grid\Column|Collection commission(string $label = null)
     * @method Grid\Column|Collection component_cost(string $label = null)
     * @method Grid\Column|Collection composition_mode(string $label = null)
     * @method Grid\Column|Collection customer_delivery_time(string $label = null)
     * @method Grid\Column|Collection customer_no(string $label = null)
     * @method Grid\Column|Collection direct_cost(string $label = null)
     * @method Grid\Column|Collection english_name(string $label = null)
     * @method Grid\Column|Collection factory_delivery_time(string $label = null)
     * @method Grid\Column|Collection factory_quoted(string $label = null)
     * @method Grid\Column|Collection fob(string $label = null)
     * @method Grid\Column|Collection fob_cost(string $label = null)
     * @method Grid\Column|Collection fob_fee(string $label = null)
     * @method Grid\Column|Collection gross_weight(string $label = null)
     * @method Grid\Column|Collection gross_weight_box(string $label = null)
     * @method Grid\Column|Collection inner(string $label = null)
     * @method Grid\Column|Collection intermediate(string $label = null)
     * @method Grid\Column|Collection material_quality(string $label = null)
     * @method Grid\Column|Collection moq(string $label = null)
     * @method Grid\Column|Collection net_weight(string $label = null)
     * @method Grid\Column|Collection net_weight_box(string $label = null)
     * @method Grid\Column|Collection order_id(string $label = null)
     * @method Grid\Column|Collection other_cost(string $label = null)
     * @method Grid\Column|Collection outer(string $label = null)
     * @method Grid\Column|Collection packaging_cost(string $label = null)
     * @method Grid\Column|Collection packing_method(string $label = null)
     * @method Grid\Column|Collection place_of_delivery(string $label = null)
     * @method Grid\Column|Collection po_no(string $label = null)
     * @method Grid\Column|Collection product_cbm(string $label = null)
     * @method Grid\Column|Collection product_factory_price(string $label = null)
     * @method Grid\Column|Collection profit_margin(string $label = null)
     * @method Grid\Column|Collection quotation_benchmark(string $label = null)
     * @method Grid\Column|Collection quote_unit(string $label = null)
     * @method Grid\Column|Collection sea_freight(string $label = null)
     * @method Grid\Column|Collection tax_rebate_rate(string $label = null)
     * @method Grid\Column|Collection unit_of_weight(string $label = null)
     * @method Grid\Column|Collection weight(string $label = null)
     * @method Grid\Column|Collection front(string $label = null)
     * @method Grid\Column|Collection inner_box(string $label = null)
     * @method Grid\Column|Collection side(string $label = null)
     * @method Grid\Column|Collection rate(string $label = null)
     * @method Grid\Column|Collection actual_total_amount(string $label = null)
     * @method Grid\Column|Collection customer_contact_id(string $label = null)
     * @method Grid\Column|Collection po(string $label = null)
     * @method Grid\Column|Collection pod(string $label = null)
     * @method Grid\Column|Collection pol(string $label = null)
     * @method Grid\Column|Collection rebate(string $label = null)
     * @method Grid\Column|Collection cbm(string $label = null)
     * @method Grid\Column|Collection cost_price(string $label = null)
     * @method Grid\Column|Collection price_formula(string $label = null)
     * @method Grid\Column|Collection showpiece_id(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection relevance_id(string $label = null)
     * @method Grid\Column|Collection quote_id(string $label = null)
     * @method Grid\Column|Collection describe(string $label = null)
     * @method Grid\Column|Collection english_describe(string $label = null)
     * @method Grid\Column|Collection english_pack_describe(string $label = null)
     * @method Grid\Column|Collection material(string $label = null)
     * @method Grid\Column|Collection mo(string $label = null)
     * @method Grid\Column|Collection pack_describe(string $label = null)
     * @method Grid\Column|Collection quoted_price(string $label = null)
     * @method Grid\Column|Collection series(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection version
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection art_no
     * @property Show\Field|Collection contract_id
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection is_tax_included
     * @property Show\Field|Collection no
     * @property Show\Field|Collection price_excluding_tax
     * @property Show\Field|Collection quantity
     * @property Show\Field|Collection remarks
     * @property Show\Field|Collection spec
     * @property Show\Field|Collection tax_rate
     * @property Show\Field|Collection unit_price
     * @property Show\Field|Collection company
     * @property Show\Field|Collection contract_type
     * @property Show\Field|Collection currency
     * @property Show\Field|Collection delivered_at
     * @property Show\Field|Collection exchange_rate
     * @property Show\Field|Collection invoice_type
     * @property Show\Field|Collection manufacturer_contact_id
     * @property Show\Field|Collection manufacturer_id
     * @property Show\Field|Collection merchandiser_id
     * @property Show\Field|Collection order_no
     * @property Show\Field|Collection payment_account
     * @property Show\Field|Collection processing_status
     * @property Show\Field|Collection purchase_method
     * @property Show\Field|Collection purchased_at
     * @property Show\Field|Collection purchaser_id
     * @property Show\Field|Collection purchaser_no
     * @property Show\Field|Collection total_amount
     * @property Show\Field|Collection valuation_clause
     * @property Show\Field|Collection account_bank
     * @property Show\Field|Collection account_name
     * @property Show\Field|Collection account_number
     * @property Show\Field|Collection bank_address
     * @property Show\Field|Collection company_address
     * @property Show\Field|Collection customer_id
     * @property Show\Field|Collection email
     * @property Show\Field|Collection fax
     * @property Show\Field|Collection is_default
     * @property Show\Field|Collection telephone
     * @property Show\Field|Collection address
     * @property Show\Field|Collection category
     * @property Show\Field|Collection grade
     * @property Show\Field|Collection payment_method
     * @property Show\Field|Collection salesman_id
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection unit
     * @property Show\Field|Collection brand
     * @property Show\Field|Collection cbm_box
     * @property Show\Field|Collection commission
     * @property Show\Field|Collection component_cost
     * @property Show\Field|Collection composition_mode
     * @property Show\Field|Collection customer_delivery_time
     * @property Show\Field|Collection customer_no
     * @property Show\Field|Collection direct_cost
     * @property Show\Field|Collection english_name
     * @property Show\Field|Collection factory_delivery_time
     * @property Show\Field|Collection factory_quoted
     * @property Show\Field|Collection fob
     * @property Show\Field|Collection fob_cost
     * @property Show\Field|Collection fob_fee
     * @property Show\Field|Collection gross_weight
     * @property Show\Field|Collection gross_weight_box
     * @property Show\Field|Collection inner
     * @property Show\Field|Collection intermediate
     * @property Show\Field|Collection material_quality
     * @property Show\Field|Collection moq
     * @property Show\Field|Collection net_weight
     * @property Show\Field|Collection net_weight_box
     * @property Show\Field|Collection order_id
     * @property Show\Field|Collection other_cost
     * @property Show\Field|Collection outer
     * @property Show\Field|Collection packaging_cost
     * @property Show\Field|Collection packing_method
     * @property Show\Field|Collection place_of_delivery
     * @property Show\Field|Collection po_no
     * @property Show\Field|Collection product_cbm
     * @property Show\Field|Collection product_factory_price
     * @property Show\Field|Collection profit_margin
     * @property Show\Field|Collection quotation_benchmark
     * @property Show\Field|Collection quote_unit
     * @property Show\Field|Collection sea_freight
     * @property Show\Field|Collection tax_rebate_rate
     * @property Show\Field|Collection unit_of_weight
     * @property Show\Field|Collection weight
     * @property Show\Field|Collection front
     * @property Show\Field|Collection inner_box
     * @property Show\Field|Collection side
     * @property Show\Field|Collection rate
     * @property Show\Field|Collection actual_total_amount
     * @property Show\Field|Collection customer_contact_id
     * @property Show\Field|Collection po
     * @property Show\Field|Collection pod
     * @property Show\Field|Collection pol
     * @property Show\Field|Collection rebate
     * @property Show\Field|Collection cbm
     * @property Show\Field|Collection cost_price
     * @property Show\Field|Collection price_formula
     * @property Show\Field|Collection showpiece_id
     * @property Show\Field|Collection token
     * @property Show\Field|Collection path
     * @property Show\Field|Collection relevance_id
     * @property Show\Field|Collection quote_id
     * @property Show\Field|Collection describe
     * @property Show\Field|Collection english_describe
     * @property Show\Field|Collection english_pack_describe
     * @property Show\Field|Collection material
     * @property Show\Field|Collection mo
     * @property Show\Field|Collection pack_describe
     * @property Show\Field|Collection quoted_price
     * @property Show\Field|Collection series
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection art_no(string $label = null)
     * @method Show\Field|Collection contract_id(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection is_tax_included(string $label = null)
     * @method Show\Field|Collection no(string $label = null)
     * @method Show\Field|Collection price_excluding_tax(string $label = null)
     * @method Show\Field|Collection quantity(string $label = null)
     * @method Show\Field|Collection remarks(string $label = null)
     * @method Show\Field|Collection spec(string $label = null)
     * @method Show\Field|Collection tax_rate(string $label = null)
     * @method Show\Field|Collection unit_price(string $label = null)
     * @method Show\Field|Collection company(string $label = null)
     * @method Show\Field|Collection contract_type(string $label = null)
     * @method Show\Field|Collection currency(string $label = null)
     * @method Show\Field|Collection delivered_at(string $label = null)
     * @method Show\Field|Collection exchange_rate(string $label = null)
     * @method Show\Field|Collection invoice_type(string $label = null)
     * @method Show\Field|Collection manufacturer_contact_id(string $label = null)
     * @method Show\Field|Collection manufacturer_id(string $label = null)
     * @method Show\Field|Collection merchandiser_id(string $label = null)
     * @method Show\Field|Collection order_no(string $label = null)
     * @method Show\Field|Collection payment_account(string $label = null)
     * @method Show\Field|Collection processing_status(string $label = null)
     * @method Show\Field|Collection purchase_method(string $label = null)
     * @method Show\Field|Collection purchased_at(string $label = null)
     * @method Show\Field|Collection purchaser_id(string $label = null)
     * @method Show\Field|Collection purchaser_no(string $label = null)
     * @method Show\Field|Collection total_amount(string $label = null)
     * @method Show\Field|Collection valuation_clause(string $label = null)
     * @method Show\Field|Collection account_bank(string $label = null)
     * @method Show\Field|Collection account_name(string $label = null)
     * @method Show\Field|Collection account_number(string $label = null)
     * @method Show\Field|Collection bank_address(string $label = null)
     * @method Show\Field|Collection company_address(string $label = null)
     * @method Show\Field|Collection customer_id(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection fax(string $label = null)
     * @method Show\Field|Collection is_default(string $label = null)
     * @method Show\Field|Collection telephone(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection category(string $label = null)
     * @method Show\Field|Collection grade(string $label = null)
     * @method Show\Field|Collection payment_method(string $label = null)
     * @method Show\Field|Collection salesman_id(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection unit(string $label = null)
     * @method Show\Field|Collection brand(string $label = null)
     * @method Show\Field|Collection cbm_box(string $label = null)
     * @method Show\Field|Collection commission(string $label = null)
     * @method Show\Field|Collection component_cost(string $label = null)
     * @method Show\Field|Collection composition_mode(string $label = null)
     * @method Show\Field|Collection customer_delivery_time(string $label = null)
     * @method Show\Field|Collection customer_no(string $label = null)
     * @method Show\Field|Collection direct_cost(string $label = null)
     * @method Show\Field|Collection english_name(string $label = null)
     * @method Show\Field|Collection factory_delivery_time(string $label = null)
     * @method Show\Field|Collection factory_quoted(string $label = null)
     * @method Show\Field|Collection fob(string $label = null)
     * @method Show\Field|Collection fob_cost(string $label = null)
     * @method Show\Field|Collection fob_fee(string $label = null)
     * @method Show\Field|Collection gross_weight(string $label = null)
     * @method Show\Field|Collection gross_weight_box(string $label = null)
     * @method Show\Field|Collection inner(string $label = null)
     * @method Show\Field|Collection intermediate(string $label = null)
     * @method Show\Field|Collection material_quality(string $label = null)
     * @method Show\Field|Collection moq(string $label = null)
     * @method Show\Field|Collection net_weight(string $label = null)
     * @method Show\Field|Collection net_weight_box(string $label = null)
     * @method Show\Field|Collection order_id(string $label = null)
     * @method Show\Field|Collection other_cost(string $label = null)
     * @method Show\Field|Collection outer(string $label = null)
     * @method Show\Field|Collection packaging_cost(string $label = null)
     * @method Show\Field|Collection packing_method(string $label = null)
     * @method Show\Field|Collection place_of_delivery(string $label = null)
     * @method Show\Field|Collection po_no(string $label = null)
     * @method Show\Field|Collection product_cbm(string $label = null)
     * @method Show\Field|Collection product_factory_price(string $label = null)
     * @method Show\Field|Collection profit_margin(string $label = null)
     * @method Show\Field|Collection quotation_benchmark(string $label = null)
     * @method Show\Field|Collection quote_unit(string $label = null)
     * @method Show\Field|Collection sea_freight(string $label = null)
     * @method Show\Field|Collection tax_rebate_rate(string $label = null)
     * @method Show\Field|Collection unit_of_weight(string $label = null)
     * @method Show\Field|Collection weight(string $label = null)
     * @method Show\Field|Collection front(string $label = null)
     * @method Show\Field|Collection inner_box(string $label = null)
     * @method Show\Field|Collection side(string $label = null)
     * @method Show\Field|Collection rate(string $label = null)
     * @method Show\Field|Collection actual_total_amount(string $label = null)
     * @method Show\Field|Collection customer_contact_id(string $label = null)
     * @method Show\Field|Collection po(string $label = null)
     * @method Show\Field|Collection pod(string $label = null)
     * @method Show\Field|Collection pol(string $label = null)
     * @method Show\Field|Collection rebate(string $label = null)
     * @method Show\Field|Collection cbm(string $label = null)
     * @method Show\Field|Collection cost_price(string $label = null)
     * @method Show\Field|Collection price_formula(string $label = null)
     * @method Show\Field|Collection showpiece_id(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection relevance_id(string $label = null)
     * @method Show\Field|Collection quote_id(string $label = null)
     * @method Show\Field|Collection describe(string $label = null)
     * @method Show\Field|Collection english_describe(string $label = null)
     * @method Show\Field|Collection english_pack_describe(string $label = null)
     * @method Show\Field|Collection material(string $label = null)
     * @method Show\Field|Collection mo(string $label = null)
     * @method Show\Field|Collection pack_describe(string $label = null)
     * @method Show\Field|Collection quoted_price(string $label = null)
     * @method Show\Field|Collection series(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
