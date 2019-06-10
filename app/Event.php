<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function volunteer()
    {
        return $this->belongsTo('App\User', 'id_volunteer');
    }
}
