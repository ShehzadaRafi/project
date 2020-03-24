<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_subcategories extends Model
{
    protected $table = 'job_subcategories';
    protected $fillable=['job_subcategory_name','job_category_id_fk'];
}
