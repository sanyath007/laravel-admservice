<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
  protected $connection = 'vehicle';

  protected $table = 'drivers';
}
