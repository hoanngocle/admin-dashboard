<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_word', function (Blueprint $table) {
            $table->increments('word_id');
            $table->unsignedInteger('lesson_id')->nullable();
            $table->text('word');
            $table->text('definition');
            $table->text('example_first')->nullable()->comment('Example 1 of word');
            $table->text('example_second')->nullable()->comment('Example 2 of word');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
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
        Schema::dropIfExists('tbl_word');
    }
}
