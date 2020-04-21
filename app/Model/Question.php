<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /* protected $fillable = ['title','slug','body','category_id','user_id']; */

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Model\Reply');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
    /* en vez de devolver slug bota todo en path y bota un link */
    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }
}
