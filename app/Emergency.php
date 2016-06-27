<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $table = 'emergencies';
    protected $fillable = ['id', 'name', 'contact', 'description', 'image', 'email', 'created_at', 'updated_at'];
}
