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
            $table->foreign('currency_id')->references('id')->on('currencies')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('name');

            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('state');
            $table->string('city');
            $table->string('zip_code');

            $table->text('brief_description');

            $table->integer('employment_type_id')->unsigned();
            $table->foreign('employment_type_id')->references('id')->on('employment_types')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->text('job_requirement');
            $table->text('benefit');

            $table->integer('industry_id')->unsigned();
            $table->foreign('industry_id')->references('id')->on('industries')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('experience_level_id')->unsigned();
            $table->foreign('experience_level_id')->references('id')->on('experience_levels')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('min_salary');
            $table->integer('max_salary')->nullable();

            $table->integer('functional_id')->unsigned();
            $table->foreign('functional_id')->references('id')->on('functionals')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('education_id')->unsigned();
            $table->foreign('education_id')->references('id')->on('educations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
