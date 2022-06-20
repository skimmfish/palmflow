<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPasswordToMT4DashboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_t4_dashboards', function (Blueprint $table) {
            $table->string('_password',50)->index()->nullable()->after('account_number');
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
            $table->dropColumn('_password');
        });
    }
}
