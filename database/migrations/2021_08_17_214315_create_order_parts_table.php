<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('manufacturer_id')->default(0);
            $table->string('no')->default('')->comment('编号');
            $table->string('name')->default('')->comment('名称');
            $table->string('spec')->default('')->comment('规格');
            $table->unsignedDecimal('rate', 5)->default(0.00)->comment('配比');
            $table->unsignedInteger('quantity')->default(0)->comment('数量');
            $table->unsignedDecimal('unit_price', 10)->default(0.00)->comment('单价');
            $table->unsignedDecimal('amount', 10)->default(0.00)->comment('金额');
            $table->text('remarks')->nullable()->comment('备注');
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
        Schema::dropIfExists('order_parts');
    }
}
