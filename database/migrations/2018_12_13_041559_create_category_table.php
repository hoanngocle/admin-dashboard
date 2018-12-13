<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_code')->unique();
            $table->string('category_name')->unique();
            $table->string('category_icon')->nullable()->comment('url icon of category');
            $table->enum('category_level', ['cat1', 'cat2', 'cat3'])->default('cat1')
                ->comment('level of category');
            $table->integer('parent_id')->nullable()->comment('when cat is sub-menu, need to define parent');
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
        Schema::dropIfExists('tbl_category');
    }
}
