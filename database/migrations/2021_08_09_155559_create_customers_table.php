<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('姓名');
            $table->string('category')->default('')->comment('客户分类');
            $table->unsignedInteger('salesman_id')->default(0)->comment('业务员');
            $table->unsignedInteger('merchandiser_id')->default(0)->comment('跟单员');
            $table->tinyInteger('grade')->comment('客户等级');
            $table->string('currency')->default('')->comment('币种');
            $table->string('payment_method')->default('')->comment('付款方式');
            $table->string('address')->default('')->comment('客户地址');
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
        Schema::dropIfExists('customers');
    }
}
