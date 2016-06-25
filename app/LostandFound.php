<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LostandFound extends Model
{
    protected $table = 'lostandfounds';
    protected $fillable = ['id', 'image', 'description', 'created_at', 'updated_at'];
}
