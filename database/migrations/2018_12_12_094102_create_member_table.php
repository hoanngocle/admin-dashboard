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
            $table->string('member_code', 12);
            $table->string('email', 255)->unique();
            $table->string('username', 255)->unique();
            $table->string('password', 255);
            $table->dateTime('password_expried_time');
            $table->dateTime('log_date')->nullable()->comment('Show last login time of admin');
            $table->integer('log_num')->unsigned()->default(1)->comment('Count login times of admin');
            $table->enum('is_online', ['Online', 'Offline'])->default('Offline')->comment('Member status');
            $table->enum('is_active', ['Block', 'Actived'])->default('Actived')->comment('Member account status');
            $table->string('nickname', 50);
            $table->date('dob')->nullable()->comment('Date Of Birth');
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->unsignedBigInteger('coin')->default(0)->comment('Coin of member');
            $table->unsignedInteger('level')->default(1)->comment('Level of member: define in table tm_level');
            $table->unsignedBigInteger('exp')->default(0)->comment('Exp of member');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();
            $table->integer('upuser')->nullable();
        });

        Schema::table('tbl_member', function (Blueprint $table) {
            $table->string('rp_token', 255)->nullable()->after('password_expried_time');
            $table->string('avatar', 255)->nullable()->after('nickname');
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
