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

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/', 'PagesController@index');
//Route::get('index', 'PagesController@index');
Route::get('home', 'PagesController@home');
// Route::get('/adminLayouts/admin_createUser', 'PagesController@adminCreateUser');
// Route::get('/adminLayouts/admin_usersList', 'PagesController@adminUsersList');
Route::get('/sharedLayouts/messageCreate', 'PagesController@messageCreate');
Route::get('/sharedLayouts/messagesCurrent', 'PagesController@messageListCurrent');
Route::get('/sharedLayouts/messagesDone', 'PagesController@messageListDone');
Route::get('/sharedLayouts/search', 'PagesController@search');
Route::get('/reports/reportCSU', 'PagesController@reportCSU');
Route::get('/reports/reportLibDaily_Form', 'PagesController@reportLibDaily_Form');
Route::get('/reports/reportLibWeekly_Form', 'PagesController@reportLibWeekly_Form');
Route::get('/reports/reportLibMonthly_Form', 'PagesController@reportLibMonthly_Form');
Route::get('/reports/reportLibSemestral_Form', 'PagesController@reportLibSemestral_Form');
Route::get('/reports/reportLibSchoolYear_Form', 'PagesController@reportLibSchoolYear_Form');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/users/', 'AdminController@users');
Route::get('/admin/users/create/', 'AdminController@search');
Route::get('/admin/users/{idno?}', 'AdminController@show');
Route::post('/admin/users/create', 'AdminController@create');
Route::post('/admin/users/{idno?}', 'AdminController@store');
Route::get('/admin/users/{idno?}/edit', 'AdminController@edit');
Route::post('/admin/users/{idno?}/edit', 'AdminController@update');

Route::post('auth/login', 'AuthController@login');
Route::get('auth/logout', 'AuthController@logout');

Route::get('/user', 'UserController@index');
