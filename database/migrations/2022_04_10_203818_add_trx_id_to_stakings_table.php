<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrxIdToStakingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stakings', function (Blueprint $table) {
            $table->string('trx_id',28)->unsigned()->after('id');
//			$table->foreign('transaction_id')->references('transaction_id')->on('transactions');
			
			
			//$table->integer('user_id')->unsigned();
			//$table->foreign('user_id')->references('id')->on('users');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stakings', function (Blueprint $table) {
            $table->dropColumn('trx_id');
        });
    }
}
