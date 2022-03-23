<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_models', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title',100)->nullable();
			$table->string('first_name', 72);
			$table->string('last_name',72);
			$table->string('user__email',72)->nullable();
			$table->string('phone_number',14)->nullable();
			$table->string('issues_category',40);
			$table->string('message',40);
			
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
        Schema::dropIfExists('contact_models');
    }
}
