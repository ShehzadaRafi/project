<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobApplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_apply', function (Blueprint $table) {
            $table->bigIncrements('job_apply_id');
            $table->string('job_apply_username');
            $table->string('job_apply_email');
            $table->string('job_apply_phone');
            $table->string('job_apply_attachment');
            $table->string('job_apply_experience');
            $table->string('job_apply_extra_info');
            $table->timestamps();
            $table->unsignedBigInteger('job_id_fk');
            $table->foreign('job_id_fk')->references('job_id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_apply');
    }
}
