<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    public function cate()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
}
