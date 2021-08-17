<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('manufacturer_id')->comment('厂家');
            $table->string('po_no')->default('')->comment('单号');
            $table->string('no')->default('')->comment('货号');
            $table->string('customer_no')->default('')->comment('客号');
            $table->string('name')->default('')->comment('产品名');
            $table->string('english_name')->default('')->comment('产品名『英文』');
            $table->string('brand')->default('')->comment('品牌');
            $table->string('packing_method')->default('')->comment('包装方式');
            $table->string('inner')->default('')->comment('内');
            $table->string('intermediate')->default('')->comment('中');
            $table->string('outer')->default('')->comment('外');
            $table->string('composition_mode')->default('')->comment('组成方式');
            $table->unsignedInteger('quantity')->default(0)->comment('数量');
            $table->string('quote_unit')->default('')->comment('报价单位');
            $table->unsignedDecimal('unit_price', 10)->default(0.00)->comment('单价');
            $table->unsignedDecimal('profit_margin', 10)->default(0.00)->comment('利润率');
            $table->unsignedDecimal('factory_quoted', 10)->default(0.00)->comment('工厂报价');
            $table->unsignedDecimal('tax_rebate_rate', 10)->default(0.00)->comment('退税率');
            $table->unsignedDecimal('tax_rate', 10)->default(0.00)->comment('税率');
            $table->unsignedDecimal('price_excluding_tax', 10)->default(0.00)->comment('不含税单价');
            $table->string('place_of_delivery')->default('')->comment('交货地点');
            $table->string('material_quality')->default('')->comment('材质');
            $table->unsignedDecimal('fob', 10)->default(0.00)->comment('FOB');
            $table->unsignedDecimal('fob_cost', 10)->default(0.00)->comment('FOB 成本');
            $table->unsignedDecimal('fob_fee', 10)->default(0.00)->comment('FOB 费用');
            $table->string('quotation_benchmark')->default('')->comment('报价基准');
            $table->unsignedDecimal('product_factory_price', 10)->default(0.00)->comment('产品出厂价');
            $table->unsignedDecimal('direct_cost', 10)->default(0.00)->comment('直接成本');
            $table->unsignedDecimal('component_cost', 10)->default(0.00)->comment('部件成本');
            $table->unsignedDecimal('packaging_cost', 10)->default(0.00)->comment('包材成本');
            $table->unsignedDecimal('other_cost', 10)->default(0.00)->comment('其他成本');
            $table->unsignedDecimal('sea_freight', 10)->default(0.00)->comment('海运费');
            $table->unsignedDecimal('commission', 10)->default(0.00)->comment('佣金');
            $table->unsignedDecimal('product_cbm', 10)->default(0.00)->comment('产品 CBM');
            $table->unsignedDecimal('cbm_box', 10)->default(0.00)->comment('CMB / 箱');
            $table->unsignedDecimal('net_weight', 10)->default(0.00)->comment('净重');
            $table->unsignedDecimal('net_weight_box', 10)->default(0.00)->comment('净重 / 箱');
            $table->unsignedDecimal('gross_weight', 10)->default(0.00)->comment('毛重');
            $table->unsignedDecimal('gross_weight_box', 10)->default(0.00)->comment('毛重 / 箱');
            $table->unsignedDecimal('weight', 10)->default(0.00)->comment('产品重量');
            $table->string('unit_of_weight')->default('')->comment('重量单位');
            $table->unsignedInteger('moq')->default(0)->comment('MOQ');
            $table->timestamp('factory_delivery_time')->nullable()->comment('工厂交货期');
            $table->timestamp('customer_delivery_time')->nullable()->comment('客户交货期');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
