<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
  public function slider()
  {
    return $this->hasOne('App\Slider');
  }
}
