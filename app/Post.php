<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // protected $table = 'post';
    //增加白名單
    protected $fillable = ['title','content'];
}
