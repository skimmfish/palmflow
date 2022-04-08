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
        Schema::table('daily_report_models', function (Blueprint $table) {
            //
			$table->double('total_daily_roi')->index()->nullable();
			$table->double('futures_roi')->index()->nullable();
			$table->double('fx_roi')->index()->nullable();
			$table->double('stakers_split')->index()->nullable();
			$table->double('directors_split')->index();
			$table->double('charity_split')->index();
			$table->double('highest_daily_dd')->nullable();
			$table->double('overnight_dd')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('daily_report_models', function (Blueprint $table) {
            
			$table->dropColumn('total_daily_roi');
			$table->dropColumn('futures_roi');
			$table->dropColumn('fx_roi');
			$table->dropColumn('stakers_split');
			$table->dropColumn('directors_split');
			$table->dropColumn('charity_split');
			$table->dropColumn('highest_daily_dd');
			$table->dropColumn('overnight_dd');
			
        });
    }
}
