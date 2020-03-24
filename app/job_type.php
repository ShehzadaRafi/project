<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_type extends Model
{
    protected $table = 'job_type';
    protected $fillable=['job_type_name'];
}
