<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturerBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer_id')->default('');
            $table->string('name')->default('')->comment('账户名称');
            $table->string('currency')->default('')->comment('币种');
            $table->string('account_name')->default('')->comment('开户名');
            $table->string('account_number')->default('')->comment('银行账号');
            $table->string('account_bank')->default('')->comment('所属银行');
            $table->string('bank_address')->default('')->comment('银行地址');
            $table->string('company_address')->default('')->comment('公司地址');
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
        Schema::dropIfExists('manufacturer_banks');
    }
}
