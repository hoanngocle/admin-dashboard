<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTokenAvatarToMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        Schema::table('tbl_member', function (Blueprint $table) {
            //
        });
    }
}
