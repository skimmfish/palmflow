<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gas_fees', function (Blueprint $table) {
            $table->id();
            $table->double('amount')->index();
            $table->integer('user_id')->unsigned()->index()->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('txn_id')->unique()->index();
            $table->double('staked_value')->index();
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
        Schema::dropIfExists('gas_fees');
    }
}
