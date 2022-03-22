<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_models', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('pub_status')->nullable();
			$table->integer('read_status')->nullable();
			$table->string('note')->nullable;
			$table->string('subject')->nullable();
			$table->string('notifiation_type'); //either system wide (system_wide) notification or meant for a user (user_notification)
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
        Schema::dropIfExists('notification_models');
    }
}
