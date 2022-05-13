<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WithdrawalCurrency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crypto_a_p_i_managers', function (Blueprint $table) {
            $table->boolean('autoload')->after('key_value')->default(0);
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
            $table->dropColumn('autoload');
        });
    }
}
