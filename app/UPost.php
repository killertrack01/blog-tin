<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UPost extends Model
{
    //Khai bao table tương ứng với model
    protected $table = "post";
    //Khai báo trường khóa chính
    protected $primaryKey = "id";
    //Mắc định khóa chính tự động tăng
    public $incrementing = true;
    protected $fillable = ['id', 'title', 'summary', 'detail', 'author', 'img', 'status','created_at','updated_at','category_id','users_id'];
}
