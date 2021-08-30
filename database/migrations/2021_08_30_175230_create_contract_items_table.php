<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('contract_id');
            $table->string('art_no')->default('')->comment('货号');
            $table->string('no')->default('')->comment('编号');
            $table->string('name')->default('')->comment('名称');
            $table->string('spec')->default('')->comment('规格');
            $table->unsignedInteger('quantity')->default(0)->comment('数量');
            $table->unsignedDecimal('unit_price', 10)->default(0.00)->comment('单价');
            $table->unsignedDecimal('amount', 10)->default(0.00)->comment('金额');
            $table->boolean('is_tax_included')->default(true)->comment('是否含税');
            $table->unsignedDecimal('tax_rate', 10)->default(0.00)->comment('含税比率');
            $table->unsignedDecimal('price_excluding_tax', 10)->default(0.00)->comment('不含税价');
            $table->text('remarks')->comment('备注');
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
        Schema::dropIfExists('contract_items');
    }
}
