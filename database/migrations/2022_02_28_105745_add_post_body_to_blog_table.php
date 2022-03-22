<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostBodyToBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
            $table->increments('id');
			$table->string('post_title');
			$table->string('post_body');
			$table->string('intro');
			$table->string('header_bg');
			$table->string('body_img');
			$table->boolean('pub_status')->nullable();
			$table->string('author');
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
        Schema::table('articles', function (Blueprint $table) {
            //
			$table->dropColumn('post_title');
			$table->dropColumn('post_body');
			$table->dropColumn('intro');
			$table->dropColumn('header_bg');
			$table->dropColumn('body_img');
			$table->dropColumn('pub_status');
			$table->dropColumn('author');
        });
    }
}
