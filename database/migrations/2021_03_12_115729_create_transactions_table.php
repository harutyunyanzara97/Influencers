<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transaction_id');
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('to_id')->nullable();
            $table->float('amount');
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('date');
            $table->timestamps();
        });
        Schema::table('transactions', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
