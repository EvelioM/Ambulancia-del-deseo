<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'surname',
        'phone',
        'is_solicitor',
        'is_admin',
        'is_volunteer',
        'password',
        'status',
        'is_active',    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wish()
    {
        return $this->hasOne('App\Deseo');
    }

    public function work()
    {
        return $this->belongsToMany('App\Deseo');
    }

    public function events()
    {
        return $this->hasMany('App\Event', 'id_volunteer', 'id');
    }
}
