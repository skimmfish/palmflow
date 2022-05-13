<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOptionKeyAndValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crypto_a_p_i_managers', function (Blueprint $table) {
            $table->string('key_option')->unique();
            $table->string('key_value')->nullable();
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
            $table->dropColumn('key_option');
            $table->dropColumn('key_value');
        });
    }
}
