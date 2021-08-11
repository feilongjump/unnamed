<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowpiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showpieces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('manufacturer_id')->default(0)->comment('厂家');
            $table->string('mo')->default('')->comment('MO');
            $table->string('no')->default('')->comment('编号');
            $table->string('name')->default('')->comment('产品名');
            $table->string('english_name')->default('')->comment('产品名『英文』');
            $table->string('spec')->default('')->comment('规格');
            $table->string('series')->default('')->comment('系列');
            $table->string('material')->default('')->comment('材料');
            $table->unsignedDecimal('unit_price', 10)->default(0.00)->comment('单价');
            $table->unsignedDecimal('quoted_price', 10)->default(0.00)->comment('报价');
            $table->unsignedDecimal('tax_rebate_rate', 10)->default(0.00)->comment('退税率');
            $table->string('describe')->default('')->comment('样品名描述');
            $table->string('english_describe')->default('')->comment('样品名描述『英文』');
            $table->string('pack_describe')->default('')->comment('包装描述');
            $table->string('english_pack_describe')->default('')->comment('包装描述『英文』');
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
        Schema::dropIfExists('showpieces');
    }
}
