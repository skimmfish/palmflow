<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLeverageToMt4dashboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_t4_dashboards', function (Blueprint $table) {
            $table->string('leverage')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_t4_dashboards', function (Blueprint $table) {
            $table->dropColumn('leverage');
        });
    }
}
