<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatejobsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->string('name');

            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');

            $table->string('state');
            $table->string('city');
            $table->string('zip_code');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');

            $table->text('brief_description');

            $table->integer('employment_type_id')->unsigned();
            $table->foreign('employment_type_id')->references('id')->on('employment_types');

            $table->text('job_requirement');
            $table->text('benefit');

            $table->integer('industry_id')->unsigned();
            $table->foreign('industry_id')->references('id')->on('industries');

            $table->integer('experience_level_id')->unsigned();
            $table->foreign('experience_level_id')->references('id')->on('experience_levels');

            $table->integer('min_salary');
            $table->integer('max_salary');

            $table->integer('functional_id')->unsigned();
            $table->foreign('functional_id')->references('id')->on('functionals');

            $table->integer('education_id')->unsigned();
            $table->foreign('education_id')->references('id')->on('educations');
            
            $table->string('keyword');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}