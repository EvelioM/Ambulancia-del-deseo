<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MakeProgrammedDayNullable extends Migration
{

    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deseos', function (Blueprint $table) {
            $table->date('programmed_day')->nullable()->change();
            $table->renameColumn('programmed_day', 'scheduled_day');
        });

        Schema::rename('patien_data', 'patient_data');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deseos', function (Blueprint $table) {
            $table->date('programmed_day')->nullable(false)->change();
            $table->renameColumn('scheduled_day', 'programmed_day');
        });

        Schema::rename('patient_data', 'patien_data');
    }
}
