<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_type extends Model
{
	protected $table = 'user_type';
    protected $fillable=['user_type_name'];
}
