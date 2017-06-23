<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
  protected $connection = 'laundry';

  protected $table = 'staffs';
}
