<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
//    if there is different name with default name
//    protected $table = 'posts';
//    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'body'
    ];
}
