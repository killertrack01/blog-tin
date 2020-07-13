<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";

    protected $primarykey = "id";

    public $incrementing = true;
    public $fillable = ['id', 'email', 'name', 'rate', 'detail', 'created_at', 'status'];
}
