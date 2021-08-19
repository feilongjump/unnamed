<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->json('front')->comment('正唛');
            $table->json('side')->comment('侧唛');
            $table->json('inner_box')->comment('内盒唛');
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
        Schema::dropIfExists('order_marks');
    }
}
