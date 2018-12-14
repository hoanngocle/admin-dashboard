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
            $table->string('saving_name', 255);
            $table->integer('value');
            $table->bigInteger('target');
            $table->dateTime('finish_time')->nullable();
            $table->text('description')->nullable();
            $table->enum('is_done', ['Running', 'Finish'])->default('Running')->nullable()->comment('Status of saving');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('upuser')->nullable();
        });

        Schema::table('tbl_saving', function (Blueprint $table) {
            $table->foreign('member_id')->references('member_id')->on('tbl_member')->onDelete('SET NULL');
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
