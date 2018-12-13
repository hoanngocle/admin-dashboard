<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_level', function (Blueprint $table) {
            $table->increments('level_id');
            $table->smallInteger('level');
            $table->string('name', 50)->comment('Name of level');
            $table->float('exp_require')->unsigned()->comment('Exp required to level up');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_level');
    }
}
