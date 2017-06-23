<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $connection = 'person';

    protected $table = 'ward';

    public function bring()
    {
        return $this->hasMany('App\Bring', 'depart_id', 'ward_id');
    }
  
    public function user()
    {
        return $this->belongsTo('App\User', 'ward_id', 'office_id');
    }
}
