<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalDailyRoiToDailyReportModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_report_models', function (Blueprint $table) {
            $table->id();
			$table->double('total_daily_roi')->index()->nullable();
			$table->double('futures_roi')->index()->nullable();
			$table->double('fx_roi')->index()->nullable();
			$table->double('stakers_split')->index()->nullable();
			$table->double('directors_split')->index();
			$table->double('charity_split')->index();
			$table->double('highest_daily_dd')->nullable();
			$table->double('overnight_dd')->nullable();
			$table->Integer('last_updated_by')->index()->nullable();
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
        Schema::dropIfExists('daily_report_models');
    }
}
