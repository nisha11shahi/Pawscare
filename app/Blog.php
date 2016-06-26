<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['id', 'title', 'body', 'author', 'image', 'created_at', 'updated_at'];
}
