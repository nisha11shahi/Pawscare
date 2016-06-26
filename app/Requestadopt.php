<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestadopt extends Model
{
    protected $table = 'requestadopts';
    protected $fillable = ['id', 'name', 'phone', 'email', 'address', 'whyadopt','created_at', 'updated_at'];
}
