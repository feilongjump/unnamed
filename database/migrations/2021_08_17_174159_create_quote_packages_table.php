<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quote_id');
            $table->unsignedInteger('manufacturer_id')->default(0);
            $table->string('no')->default('')->comment('编号');
            $table->string('name')->default('')->comment('名称');
            $table->string('spec')->default('')->comment('规格');
            $table->unsignedDecimal('rate', 5)->default(0.00)->comment('包装率');
            $table->unsignedInteger('quantity')->default(0)->comment('数量');
            $table->unsignedDecimal('unit_price', 10)->default(0.00)->comment('单价');
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
        Schema::dropIfExists('quote_packages');
    }
}