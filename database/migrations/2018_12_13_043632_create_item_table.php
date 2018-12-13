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
            $table->unsignedInteger('category_id')->nullable()->comment('Foreign key with category_table');
            $table->string('item_code')->unique();
            $table->string('item_name')->unique();
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('upuser')->nullable();
        });

        Schema::table('tm_item', function (Blueprint $table) {
            $table->foreign('category_id')->references('category_id')->on('tbl_category')->onDelete('SET NULL');
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
