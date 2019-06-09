<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function data()
    {
        return $this->hasOne('App\PatientData');
    }

    public function wishes()
    {
        return $this->hasMany('App\Deseo');
    }
}
