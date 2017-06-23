<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BringDetail extends Model
{
  protected $connection = 'laundry';

  protected $table = 'bring_detail';

  public function bring()
  {
    return $this->belongsTo('App\Bring', 'bring_id', 'id');
  }
}
