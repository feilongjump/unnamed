<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer_id')->default('')->comment('厂家');
            $table->string('code')->default('')->comment('物料编号');
            $table->string('name')->default('')->comment('名称');
            $table->string('spec')->default('')->comment('规格');
            $table->string('category')->default('')->comment('分类');
            $table->string('unit')->default('')->comment('单位');
            $table->string('unit_price')->default('')->comment('单价');
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
        Schema::dropIfExists('materials');
    }
}
