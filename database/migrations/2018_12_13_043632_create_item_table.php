<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_item', function (Blueprint $table) {
            $table->increments('item_id');
            $table->unsignedInteger('category_id')->comment('Foreign key with category_table');
            $table->string('item_code');
            $table->string('item_name');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('upuser')->nullable();
            $table->foreign('category_id')->references('category_id')->on('tbl_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_item');
    }
}
