<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_managers', function (Blueprint $table) {
            $table->id();
            $table->string('asset_type',35)->nullable()->unique();
            $table->double('asset_amount')->nullable()->index();
            $table->double('asset_starting_initial')->nullable()->index();
            $table->double('asset_current_value')->nullable();
            $table->double('asset_growth_factor')->nullable();
            $table->double('target_asset_value')->nullable();
            $table->double('target_estimated_period_days')->nullable();
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
        Schema::dropIfExists('asset_managers');
    }
}
