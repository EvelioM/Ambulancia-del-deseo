<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deseo extends Model
{
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function solicitor()
    {
        return $this->belongsTo('App\User');
    }

    public function volunteers()
    {
        return $this->belongsToMany('App\User');
    }
}
