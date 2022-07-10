<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInvestorPasswordToMT4Dashboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_t4_dashboards', function (Blueprint $table) {
            $table->string('investor_password',30)->nullable()->index();
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
            $table->dropColumn('investor_password');
        });
    }
}
