<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_menu', function (Blueprint $table) {
            $table->increments('dish_id');
            $table->string('dish_name', 255)->comment('Name of dish');
            $table->dateTime('eat_lasttime')->comment('Last time eat this dish');
            $table->integer('eat_count')->comment('Count eat times of dish');
            $table->unsignedInteger('kcal')->comment('Kilo calo of dish');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('tm_menu');
    }
}
