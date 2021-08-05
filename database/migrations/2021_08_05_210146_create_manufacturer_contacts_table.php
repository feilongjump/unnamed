<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer_id')->default('');
            $table->string('name')->default('')->comment('姓名');
            $table->string('telephone')->default('')->comment('电话');
            $table->string('email')->default('')->comment('E-mail');
            $table->string('fax')->default('')->comment('传真');
            $table->boolean('is_default')->default(false)->comment('默认联系人');
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
        Schema::dropIfExists('manufacturer_contacts');
    }
}
