<?php

use App\Models\Order;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->comment('客户');
            $table->unsignedInteger('customer_contact_id')->comment('联系人');
            $table->string('company')->default('')->comment('出口公司');
            $table->unsignedInteger('salesman_id')->default(0)->comment('业务员');
            $table->unsignedInteger('merchandiser_id')->default(0)->comment('跟单员');
            $table->unsignedInteger('purchaser_id')->default(0)->comment('采购员');
            $table->string('no')->default('')->comment('订单编号');
            $table->string('po')->default('')->comment('PO 号');
            $table->string('currency')->default('')->comment('币种');
            $table->unsignedDecimal('exchange_rate', 10)->default(0.00)->comment('汇率');
            $table->unsignedDecimal('commission', 10)->default(0.00)->comment('佣金');
            $table->unsignedDecimal('rebate', 5)->default(0.00)->comment('折扣');
            $table->unsignedDecimal('sea_freight', 10)->default(0.00)->comment('海运费');
            $table->unsignedDecimal('profit_margin', 5)->default(0.00)->comment('利润率');
            $table->unsignedDecimal('total_amount', 10)->default(0.00)->comment('总金额');
            $table->unsignedDecimal('actual_total_amount', 10)->default(0.00)->comment('实际总额');
            $table->string('pol')->default('')->comment('起运港');
            $table->string('pod')->default('')->comment('目的港');
            $table->string('valuation_clause')->default('')->comment('价格条款');
            $table->string('processing_status', 50)
                ->default(Order::PROCESSING_STATUS_PENDING)
                ->comment('处理状态');
            $table->text('remarks')->comment('备注');
            $table->timestamp('delivered_at')->comment('交付日期');
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
        Schema::dropIfExists('orders');
    }
}
