<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('postalAddress');
            $table->string('phoneNumber');
            $table->string('emailAddress')->unique();
            $table->boolean('medicalInsurance');
            $table->integer('insuranceNumber')->unique()->nullable();
            $table->integer('policyNumber')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
