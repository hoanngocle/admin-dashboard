<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_book', function (Blueprint $table) {
            $table->increments('book_id');
            $table->unsignedInteger('author_id')->nullable();
            $table->string('book_code', 12);
            $table->string('title', 255);
            $table->text('description');
            $table->integer('chapter_num');
            $table->integer('word_num');
            $table->tinyInteger('status')->default(1)->comment('Status of book: 1 - Continue; 2 - Finished');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('upuser')->nullable();
            $table->softDeletes();
        });

        Schema::table('tbl_book', function (Blueprint $table) {
            $table->foreign('author_id')->references('author_id')->on('tbl_author')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_book');
    }
}
