<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->default('')->comment('厂家编号');
            $table->string('name')->default('')->comment('厂家名称');
            $table->string('category')->default('')->comment('厂家分类');
            $table->bigInteger('purchaser')->comment('采购负责人');
            $table->string('address')->default('')->comment('厂家地址');
            $table->string('remarks')->default('')->comment('备注');
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
        Schema::dropIfExists('manufacturer');
    }
}
