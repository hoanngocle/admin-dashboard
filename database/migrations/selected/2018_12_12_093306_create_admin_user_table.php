<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin_user', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('lastname', 100)->nullable();
            $table->string('firstname', 100);
            $table->string('email', 255)->unique();
            $table->string('username', 255)->unique();
            $table->string('password', 255);
            $table->timestamp('log_date')->comment('Show last login time of admin');
            $table->integer('log_num')->unsigned()->default(1)->comment('Count login times of admin');
            $table->tinyInteger('is_active')->unsigned()->default(1)
                ->comment('Admin account is active or block: 0 - block; 1 - active');
            $table->tinyInteger('acl_flag')->unsigned()->comment('Admin roles: 1 - mod ; 99 - admin');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin_user');
    }
}
