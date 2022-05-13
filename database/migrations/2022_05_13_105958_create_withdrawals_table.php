<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->double('amount')->nullable();
        	$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
            $table->string('transaction_id')->index();
            $table->string('receiving_wallet_id')->index()->nullable();
            $table->boolean('status')->nullable();
            $table->Integer('confirmations')->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdrawals');
    }
}
