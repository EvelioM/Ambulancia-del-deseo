<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function volunteer()
    {
        return $this->hasOne('App\User');
    }
}
