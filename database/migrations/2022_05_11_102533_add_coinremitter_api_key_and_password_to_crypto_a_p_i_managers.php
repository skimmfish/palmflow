<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoinremitterApiKeyAndPasswordToCryptoAPIManagers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crypto_a_p_i_managers', function (Blueprint $table) {
            $table->string('coinremitter_api_key')->unique()->nullable()->after('eth_wallet_id');
            $table->string('coinremitter_api_password')->nullable();
            $table->string('coinremitter_btc_wallet')->nullable();
            $table->string('coinremitter_usdterc20_wallet')->nullable();
            $table->string('coinremitter_bnb_wallet')->nullable();
            $table->string('wallet_label',40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crypto_a_p_i_managers', function (Blueprint $table) {
            $table->dropColumn('coinremitter_api_key');
            $table->dropColumn('coinremitter_api_password');
            $table->dropColumn('coinremitter_btc_wallet');
            $table->dropColumn('coinremitter_usdterc20_wallet');
            $table->dropColumn('coinremitter_bnb_wallet');
            $table->dropColumn('wallet_label');
        });
        
    }
}
