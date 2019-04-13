<?php

namespace App\Models;

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
        'id', 'first_name', 'last_name', 'email', 'password'
    ];

    /**
     *The attributes that should be hidden for arrays.
     *
     *@var array
     */
    protected $hidden = [
        'password','remember_token','id','updated_at','created_at'
    ];


    public function studentInfo(){
        return $this->hasOne('App\Models\StudentInfo', 'user_id', 'id');
    }

    public function registrationAccessToken() {
        return $this->hasOne('App\Models\RegistrationAccessToken', 'user_id', 'id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}