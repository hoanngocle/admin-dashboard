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
            $table->dateTime('log_date')->nullable()->comment('Show last login time of admin');
            $table->unsignedInteger('log_num')->default(1)->comment('Count login times of admin');
            $table->enum('is_active', ['Actived', 'Block'])->default('Actived')->comment('Admin account status');
            $table->enum('acl_flag', ['Moderator', 'Admin'])->default('Moderator')->comment('Admin roles');
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
        Schema::dropIfExists('tbl_admin_user');
    }
}
