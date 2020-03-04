<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_subcategories', function (Blueprint $table) {
            $table->bigIncrements('job_subcategory_id');
            $table->string('job_subcategory_name');
            $table->timestamps();
            $table->unsignedBigInteger('job_category_id_fk');
            $table->foreign('job_category_id_fk')->references('job_category_id')->on('job_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_subcategories');
    }
}
