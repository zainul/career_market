<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateprofilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('github');
            $table->integer('current_salary');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('min_expected_salary');
            $table->integer('max_expected_salary');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('profiles');
    }
}
