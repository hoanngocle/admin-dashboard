<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transaction', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->unsignedInteger('member_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('wallet_id')->nullable();
            $table->unsignedInteger('loan_debt_id')->nullable();
            $table->unsignedInteger('budget_id')->nullable();
            $table->unsignedInteger('saving_id')->nullable();
            $table->string('name', 100);
            $table->bigInteger('value')->comment('Value of transaction');
            $table->string('description', 255)->comment('Show content of transaction');
            $table->enum('type', ['Inflow', 'Outflow'])->comment('Type of transaction');
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
        Schema::dropIfExists('tbl_transaction');
    }
}
