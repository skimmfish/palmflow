<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameAndSubscriptionIdToSubscriptionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscription_models', function (Blueprint $table) {
            //
			$table->string('username')->nullable();
			$table->double('amount')->nullable();
			$table->string('currency_type')->nullable();
			$table->integer('block_confirmations')->nullable();
			$table->string('wallet_id')->nullable();
			$table->string('paying_wallet_id')->nullable();
			$table->string('receiving_wallet_id')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_models', function (Blueprint $table) {
            //
			$table->dropColumn('username');
			$table->dropColumn('amount');
			$table->dropColumn('currency_type');
			$table->dropColumn('block_confirmations');
			$table->dropColumn('wallet_id');
			$table->dropColumn('paying_wallet_id');
			$table->dropColumn('receiving_wallet_id');
			
        });
    }
}
