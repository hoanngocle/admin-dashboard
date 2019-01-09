<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_result', function (Blueprint $table) {
            $table->increments('entity_id');
            $table->unsignedInteger('member_id')->nullable();
            $table->unsignedInteger('lesson_id')->nullable();
            $table->longText('content')->nullable()->comment('save content result');
            $table->integer('wrong_answer')->comment('use to count point');
            $table->integer('total_question')->comment('total number of question of test');
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
        Schema::dropIfExists('tbl_result');
    }
}
