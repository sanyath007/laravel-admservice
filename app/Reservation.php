<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $connection = 'vehicle';

  protected $table = 'reservations';
}
