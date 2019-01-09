<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_saving', function (Blueprint $table) {
            $table->increments('saving_id');
            $table->unsignedInteger('member_id')->nullable();
            $table->string('name', 255);
            $table->integer('value');
            $table->bigInteger('target');
            $table->dateTime('finish_time')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_done')->default(0)->comment('0: Running; 1: Done');
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
        Schema::dropIfExists('tbl_saving');
    }
}
