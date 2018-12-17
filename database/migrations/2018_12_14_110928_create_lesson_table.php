<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lesson', function (Blueprint $table) {
            $table->increments('lesson_id');
            $table->unsignedInteger('course_id')->nullable();
            $table->string('title', 255);
            $table->integer('term_count');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();
            $table->integer('upuser')->nullable();
        });

        Schema::table('tbl_lesson', function (Blueprint $table) {
            $table->foreign('course_id')->references('course_id')->on('tbl_course')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_lesson');
    }
}
