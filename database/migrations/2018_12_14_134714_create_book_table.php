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
            $table->string('book_cover')->nullable()->comment('cover url image in S3 - or directory in server');
            $table->text('description');
            $table->integer('chapter_num');
            $table->integer('word_num');
            $table->tinyInteger('status')->default(1)->comment('Status of book: 1 - Continue; 2 - Finished');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();
            $table->integer('upuser')->nullable();
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
