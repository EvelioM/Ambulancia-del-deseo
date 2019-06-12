<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertFirstAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            array(
                'email' => 'admin@deseos.com',
                'name' => 'Default',
                'surname' => 'admin',
                'phone' => '666777888',
                'is_admin' => true,
                'is_volunteer' => false,
                'is_solicitor' => false,
                'password' => bcrypt('admin'),

            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
