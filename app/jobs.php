<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $table = 'jobs';
    protected $fillable=['job_email','job_title','job_description','job_experience_min','job_experience_max','job_min_salary','job_max_salary','min_job_degree_level','max_job_degree_level','job_location','job_company_name','job_company_website','job_category_id_fk','job_subcategory_id_fk','job_type_id_fk','job_post_status','job_post_user_id_fk'];
}
