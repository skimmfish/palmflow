<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlatformTypeToMt4Dashboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_t4_dashboards', function (Blueprint $table) {
            $table->string('platform_type')->after('broker_name')->nullable()->index();
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
            $table->dropColumn('platform_type');
        });
    }
}
