<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFnameAndLnameTable extends Migration
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
			$table->string('first_name', 55)->nullable();
			$table->string('last_name', 55)->nullable();
			$table->string('profile_img', 125)->nullable();
			$table->string('telephone', 11)->nullable();
			$table->string('linkedin_url', 225)->nullable();
			$table->string('facebook_url', 225)->nullable();
			$table->string('twitter_url', 225)->nullable();
			$table->string('instagram_url', 225)->nullable();
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
			$table->dropColumn('first_name');
			$table->dropColumn('last_name');
			$table->dropColumn('profile_img');
			$table->dropColumn('linkedin');
			$table->dropColumn('facebook_url');
			$table->dropColumn('twitter_url');
			$table->dropColumn('instagram_url');
			$table->dropColumn('telephone');
		});
    }
}
