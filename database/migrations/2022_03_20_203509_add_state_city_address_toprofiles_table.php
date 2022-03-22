<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStateCityAddressToprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
			$table->string('address',205)->nullable();
			$table->string('state',45)->nullable();
			$table->string('city', 45)->nullable();
			$table->string('country', 50)->nullable();
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
			$table->dropColumn('address');
			$table->dropColumn('state');
			$table->dropColumn('city');
			$table->dropColumn('country');
        });
    }
}
