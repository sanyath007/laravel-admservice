<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrapeType extends Model
{
  protected $connection = 'laundry';

  protected $table = 'drape_types';
}
