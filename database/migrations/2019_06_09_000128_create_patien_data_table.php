<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatienDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patien_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id');
            $table->longText('address');
            $table->integer('postal_code');
            $table->string('city');
            $table->string('province');
            $table->string('phone');
            $table->boolean('private_heatlh_insurance');
            $table->boolean('has_elevator');
            $table->integer('floor');
            $table->integer('weight');
            $table->longText('situation');
            $table->boolean('has_previous_instructions');
            $table->enum('movility', array('walks', 'walks_with_assistance', 'wheelchair', 'bedridden'));
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
        Schema::dropIfExists('patien_data');
    }
}
