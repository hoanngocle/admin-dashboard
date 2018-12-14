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
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->string('icon')->nullable()->comment('url icon of category');
            $table->tinyInteger('level')->default(1)
                ->comment('level of category: 1 - cat_level_1; 2 - cat_level_2; 3 - cat_level_3');
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
