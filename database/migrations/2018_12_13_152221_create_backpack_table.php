<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackpackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_backpack', function (Blueprint $table) {
            $table->increments('entity_id');
            $table->unsignedInteger('member_id')->nullable();
            $table->unsignedInteger('item_id')->nullable();
            $table->unsignedInteger('item_num')->default(1)->comment('Amount of item in backpack');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('upuser')->nullable();
        });

        Schema::table('tbl_backpack', function (Blueprint $table) {
            $table->foreign('item_id')->references('item_id')->on('tm_item')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_backpack');
    }
}
