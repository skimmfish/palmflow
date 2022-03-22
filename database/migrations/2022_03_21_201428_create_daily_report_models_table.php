<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyReportModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_report_models', function (Blueprint $table) {
			
            $table->increments('id');
            $table->integer('staker_id')->unsigned();
			$table->foreign('staker_id')->references('id')->on('users')->onDelete('cascade');
            $table->double('staker_roi')->nullable();
			
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
        Schema::dropIfExists('daily_report_models');
    }
}
