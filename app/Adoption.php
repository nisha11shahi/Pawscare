<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $table = 'adoptions';
    protected $fillable = ['id', 'image', 'description', 'name', 'author_id', 'created_at', 'updated_at'];
}
