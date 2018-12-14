<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookViewerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_book_viewer', function (Blueprint $table) {
            $table->increments('entity_id');
            $table->unsignedInteger('book_id')->nullable();
            $table->integer('avg_point')->default(0)->comment('Point receive by vote');
            $table->integer('vote')->default(0)->comment('Count times vote');
            $table->integer('view')->default(0)->comment('count number of view in book');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('upuser')->nullable();
            $table->softDeletes();
        });

        Schema::table('tbl_book_viewer', function (Blueprint $table) {
            $table->foreign('book_id')->references('book_id')->on('tbl_book')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_book_viewer');
    }
}
