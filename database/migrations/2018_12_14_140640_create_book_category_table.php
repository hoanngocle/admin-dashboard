<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_book_category', function (Blueprint $table) {
            $table->increments('entity_id');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('book_id')->nullable();
        });

        Schema::table('tbl_book_category', function (Blueprint $table) {
            $table->foreign('category_id')->references('category_id')->on('tbl_category')->onDelete('SET NULL');
            $table->foreign('book_id')->references('book_id')->on('tbl_book')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_book_category');
    }
}
