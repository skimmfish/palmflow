<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCurrDateTodailyReportModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daily_report_models', function (Blueprint $table) {
            $table->date('curr_date')->after('updated_at')->nullable()->index();
       
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
            $table->dropColumn('curr_date');
        
        });
    }
}
