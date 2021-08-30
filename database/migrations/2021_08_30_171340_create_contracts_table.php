<?php

use App\Models\Contract;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('manufacturer_id')->comment('厂家');
            $table->unsignedInteger('manufacturer_contact_id')->comment('联系人');
            $table->string('company')->default('')->comment('交易公司');
            $table->unsignedInteger('merchandiser_id')->default(0)->comment('跟单员');
            $table->unsignedInteger('purchaser_id')->default(0)->comment('采购员');
            $table->string('purchase_method')->default('')->comment('采购方式');
            $table->string('order_no')->default('')->comment('订单号');
            $table->string('purchaser_no')->default('')->comment('采购单号');
            $table->string('currency')->default('')->comment('币种');
            $table->unsignedDecimal('exchange_rate', 10)->default(0.00)->comment('汇率');
            $table->unsignedDecimal('total_amount', 10)->default(0.00)->comment('总金额');
            $table->string('valuation_clause')->default('')->comment('价格条款');
            $table->string('payment_account')->default('')->comment('付款账号');
            $table->string('invoice_type')->default('')->comment('发票类型');
            $table->string('contract_type')->default('')->comment('合同类型');
            $table->string('processing_status')
                ->default(Contract::PROCESSING_STATUS_PENDING)
                ->comment('处理状态');
            $table->text('remarks')->comment('备注');
            $table->timestamp('delivered_at')->comment('交付日期');
            $table->timestamp('purchased_at')->comment('采购日期');
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
        Schema::dropIfExists('contracts');
    }
}
