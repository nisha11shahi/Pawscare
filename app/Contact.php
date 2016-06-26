<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['id', 'name', 'email', 'number', 'messagebody', 'created_at', 'updated_at'];
}
