<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wallet', function (Blueprint $table) {
            $table->increments('wallet_id');
            $table->unsignedInteger('member_id')->nullable();
            $table->string('wallet_name', 100);
            $table->integer('current_value')->default(0)->comment('Money in wallet');
            $table->string('wallet_icon', 255)->nullable()->comment('Url of wallet icon');
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
        Schema::dropIfExists('tbl_wallet');
    }
}
