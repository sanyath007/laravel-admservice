<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bring extends Model
{
  protected $connection = 'laundry';

  protected $table = 'bring';

  public function department()
  {
    return $this->belongsTo('App\Department', 'depart_id', 'ward_id');
  }

  public function bringDetail()
  {
    return $this->hasMany('App\BringDetail', 'bring_id', 'id');
  }
}
