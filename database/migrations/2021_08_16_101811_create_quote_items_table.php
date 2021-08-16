<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quote_id');
            $table->unsignedInteger('manufacturer_id')->comment('厂家');
            $table->string('no')->default('')->comment('货号');
            $table->string('customer_no')->default('')->comment('客号');
            $table->string('packing_method')->default('')->comment('包装方式');
            $table->string('inner')->default('')->comment('内');
            $table->string('intermediate')->default('')->comment('中');
            $table->string('outer')->default('')->comment('外');
            $table->string('composition_mode')->default('')->comment('组成方式');
            $table->unsignedInteger('quantity')->default(0)->comment('套数');
            $table->string('quote_unit')->default('')->comment('报价单位');
            $table->unsignedDecimal('unit_price', 10)->default(0.00)->comment('单价');
            $table->unsignedDecimal('profit_margin', 10)->default(0.00)->comment('利润率');
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
            $table->unsignedInteger('moq')->default(0)->comment('MOQ');
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
        Schema::dropIfExists('quote_items');
    }
}
