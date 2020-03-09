<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_like extends Model
{
    //
    public $timestamps = false;

        protected $guarded = [];

        public function author()
        {
            return $this->belongsTo(User::class, 'user_id', 'id');
        }
}
