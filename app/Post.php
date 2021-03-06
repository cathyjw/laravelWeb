<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
//    if there is different name with default name
//    protected $table = 'posts';
//    protected $primaryKey = 'id';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'title',
        'body'
    ];
}
