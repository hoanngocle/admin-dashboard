<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanDebtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_loan_debt', function (Blueprint $table) {
            $table->increments('loan_debt_id');
            $table->unsignedInteger('member_id')->nullable();
            $table->string('name', 255);
            $table->bigInteger('value')->comment('Value of debt or loan');
            $table->string('description', 255);
            $table->enum('type', ['Loan', 'Debt'])->default('Loan');
            $table->string('loan_debt_person', 100)->nullable();
            $table->tinyInteger('is_done')->default(0)->comment('0: Running; 1: Done');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();
            $table->integer('upuser')->nullable();
        });

        Schema::table('tbl_loan_debt', function (Blueprint $table) {
            $table->foreign('member_id')->references('member_id')->on('tbl_member')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_loan_debt');
    }
}
