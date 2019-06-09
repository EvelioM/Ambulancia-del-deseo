<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deseos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id');
            $table->integer('solicitor_id');
            $table->longText('descr');
            $table->date('last_day'); // The wish should be granted before this date
            $table->date('programmed_day');
            $table->enum('state', array('unapproved', 'approved', 'granted', 'done'));
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
        Schema::dropIfExists('deseos');
    }
}
