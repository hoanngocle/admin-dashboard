<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_library', function (Blueprint $table) {
            $table->increments('entity_id');
            $table->unsignedInteger('member_id')->nullable();
            $table->unsignedInteger('book_id')->nullable();
            $table->unsignedInteger('author_id')->nullable();
            $table->integer('current_chapter')->default(1)->comment('keep reading from this chapter');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();
            $table->integer('upuser')->nullable();
        });

        Schema::table('tbl_library', function (Blueprint $table) {
            $table->foreign('member_id')->references('member_id')->on('tbl_member')->onDelete('SET NULL');
            $table->foreign('book_id')->references('book_id')->on('tbl_book')->onDelete('SET NULL');
            $table->foreign('author_id')->references('author_id')->on('tbl_book')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_library');
    }
}
