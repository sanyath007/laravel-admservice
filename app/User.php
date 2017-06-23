<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'person_password'
//    ];
    
    protected $connection = 'person';

    protected $table = 'personal';
    
    public function department()
    {
        return $this->hasMany('App\Department', 'ward_id', 'office_id');
    }
}
