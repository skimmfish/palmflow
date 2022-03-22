<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileImgToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
			$table->string('username')->nullable();
			$table->string('profile_img')->nullable();
			$table->integer('active')->nullable();
			$table->string('provider_handle')->nullable();
			$table->string('handle_google')->nullable();
			$table->string('phone_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
			$table->dropColumn('username');
			$table->dropColumn('profile_img');
			$table->dropColumn('active');
			$table->dropColumn('provider_handle');
			$table->dropColumn('handle_google');
			$table->dropColumn('phone_number');
        });
    }
}
