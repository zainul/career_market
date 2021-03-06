<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@welcome');

Route::group(['prefix' => 'auth','middleware' => 'web'], function () {
   Route::get('login', 'Auth\AuthController@getLogin');
   Route::post('login', 'Auth\AuthController@postLogin');
   Route::get('logout', 'Auth\AuthController@getLogout');
   Route::get('register', 'Auth\AuthController@getRegister');
   Route::post('register', 'Auth\AuthController@postRegister');
});


Route::group(['middleware' => ['web'] ], function () {
  Route::auth();

  Route::resource('jobs', 'JobController');
  Route::get('/home', 'HomeController@index');
  Route::resource('questions', 'QuestionController');
  Route::get('/jobs/{id}/applicant/create', 'ApplicantController@create');
  Route::get('/jobs/{id}/applicants', 'JobController@applicants');
  Route::get('/applicants/{id}/answer', 'ApplicantController@answer');
  Route::resource('applicants', 'ApplicantController');
  Route::post('applicants/answer',
  ['as' => 'applicants.answered', 'uses' => 'ApplicantController@answered']);
});
