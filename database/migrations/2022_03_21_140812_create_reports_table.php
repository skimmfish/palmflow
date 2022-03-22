<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
			$table->double('day_roi')->nullable();
			$table->double('contributors_pool')->nullable();
			$table->double('bus_proc')->nullable();
			$table->double('foundation_roi')->nullable();
			$table->double('floating_dd')->nullable();
			$table->double('highest_daily_dd')->nullable();
			$table->double('overnight_dd')->nullable();
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
    
    Schema::dropIfExists('reports');
    
	}
}
