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

Route::get('/', function () {
    return view('welcome');
});

//To handle front routes

Route::get('/auth/login', 'FrontController@getLogin');
Route::get('/auth/register', 'FrontController@getRegister');
Route::get('/auth/reset-password', 'FrontController@getReset');
Route::get('/voter/voter-login', 'FrontController@getVoterLogin');
Route::get('/vote-pages/custom1','FrontController@getCustom1');


//To handle admin routes

Route::get('/admin/', 'AdminController@index');
Route::resource('/admin/portfolio', 'PortfolioController');
Route::resource('/admin/candidate', 'CandidateController');
Route::resource('/admin/voter-register', 'RegisterController');
Route::resource('/admin/accounts/','UsersController');





Route::get('/home', 'HomeController@index');
