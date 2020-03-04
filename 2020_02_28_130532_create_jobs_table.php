<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->string('job_title');
            $table->string('job_description');
            $table->string('job_experience_min');
            $table->string('job_experience_max');
            $table->string('job_min_salary');
            $table->string('job_max_salary');
            $table->string('min_job_degree_level');
            $table->string('max_job_degree_level');
            $table->string('job_location');
            $table->string('job_company_name');
            $table->string('job_company_website');
            $table->unsignedBigInteger('job_category_id_fk');
            $table->unsignedBigInteger('job_subcategory_id_fk');
            $table->unsignedBigInteger('job_type_id_fk');
            $table->foreign('job_category_id_fk')->references('job_category_id')->on('job_categories');
            $table->foreign('job_subcategory_id_fk')->references('job_subcategory_id')->on('job_subcategories');
            $table->foreign('job_type_id_fk')->references('job_type_id')->on('job_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
