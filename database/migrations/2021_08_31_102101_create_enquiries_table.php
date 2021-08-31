<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer_id')->default('')->comment('厂家');
            $table->string('manufacturer_contact_id')->default('')->comment('联系人');
            $table->string('art_no')->default('')->comment('货号');
            $table->string('standard')->default('')->comment('标准');
            $table->string('pack')->default('')->comment('包装');
            $table->unsignedInteger('moq')->default(0)->comment('MOQ');
            $table->unsignedDecimal('price', 10)->default(0.00)->comment('价格');
            $table->string('website')->default('')->comment('网址');
            $table->timestamp('delivered_at')->comment('交货日期');
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
        Schema::dropIfExists('enquiries');
    }
}
