<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoAPIManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_a_p_i_managers', function (Blueprint $table) {
            $table->id();
			$table->string('binance_usdt_wallet_id',72)->unique();
			$table->string('huobi_usdt_wallet_id',72)->unique();
			$table->string('cryptoapi_key',72)->unique();
			$table->string('cryptoapi_secret',72)->unique();
			$table->string('btc_wallet_id',72)->unique();
			$table->string('eth_wallet_id',72)->unique();
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
        Schema::dropIfExists('crypto_a_p_i_managers');
    }
}
