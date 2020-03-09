<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  public function comments()
  {
    return $this->hasMany(BlogComment::class);
  }

  public function category()
  {
    return $this->belongsTo(BlogCategory::class);
  }
}
