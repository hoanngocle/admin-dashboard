<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_chapter', function (Blueprint $table) {
            $table->increments('chapter_id');
            $table->unsignedInteger('book_id')->nullable();
            $table->unsignedInteger('author_id')->nullable();
            $table->integer('chapter_num')->default(1)->comment('serial of chapter');
            $table->string('title', 255);
            $table->longText('content');
            $table->integer('word_num')->comment('count number of word in chapter');
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
        Schema::dropIfExists('tbl_chapter');
    }
}
