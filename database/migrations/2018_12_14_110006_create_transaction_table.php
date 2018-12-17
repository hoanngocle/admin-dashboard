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

        Schema::table('tbl_transaction', function (Blueprint $table) {
            $table->foreign('member_id')->references('member_id')->on('tbl_member')->onDelete('SET NULL');
            $table->foreign('category_id')->references('category_id')->on('tbl_category')->onDelete('SET NULL');
            $table->foreign('wallet_id')->references('wallet_id')->on('tbl_wallet')->onDelete('SET NULL');
            $table->foreign('loan_debt_id')->references('loan_debt_id')->on('tbl_loan_debt')->onDelete('SET NULL');
            $table->foreign('budget_id')->references('budget_id')->on('tbl_budget')->onDelete('SET NULL');
            $table->foreign('saving_id')->references('saving_id')->on('tbl_saving')->onDelete('SET NULL');
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
