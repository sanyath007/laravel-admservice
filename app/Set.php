<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
  protected $connection = 'laundry';

  protected $table = 'sets';
}
