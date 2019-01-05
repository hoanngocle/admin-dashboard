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
