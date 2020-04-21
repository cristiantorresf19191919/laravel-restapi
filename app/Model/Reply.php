<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    public function questions()
    {
        return $this->belongsTo('App\Model\Question');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }

   
}
