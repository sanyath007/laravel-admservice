<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drape extends Model
{
  protected $connection = 'laundry';

  protected $table = 'drapes';
}
