<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
*/ 

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::resource('projects', 'ProjectsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


Route::group(['middleware' => ['auth', 'admin']], function() {

		Route::get('admin/all_users', 'AdminController@all_users');

});
