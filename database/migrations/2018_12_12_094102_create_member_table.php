<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_member', function (Blueprint $table) {
            $table->increments('member_id');
            $table->string('member_code', 50);
            $table->string('email', 255)->unique();
            $table->string('username', 255)->unique();
            $table->string('password', 255);
            $table->timestamp('password_expried_time');
            $table->timestamp('log_date')->comment('Show last login time of admin');
            $table->integer('log_num')->unsigned()->default(1)->comment('Count login times of admin');
            $table->tinyInteger('is_online')->unsigned()->default(1)
                ->comment('Member is online or offline: 0 - offline; 1 - online');
            $table->tinyInteger('is_active')->unsigned()->default(1)
                ->comment('Admin account is active or block: 0 - block; 1 - active');
            $table->tinyInteger('acl_flag')->unsigned()->comment('Admin roles: 1 - mod ; 99 - admin');
            $table->string('nickname', 20);
            $table->dateTime('dob')->comment('Date Of Birth');
            $table->string('gender', 20);
            $table->float('coin')->unsigned()->default(0)->comment('Coin of member');
            $table->unsignedInteger('level')->default(1)->comment('Level of member');
            $table->float('exp')->unsigned()->default(0)->comment('Exp of member');
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
        Schema::dropIfExists('tbl_member');
    }
}
