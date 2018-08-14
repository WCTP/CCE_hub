<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Home and Resume Routes */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/resume', 'HomeController@resume');

Route::get('/calendar', function() {
  return view('calendar');
});

/* Posts Routes */
Route::get('/', 'HomeController@index');

Route::get('/posts/index', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

/* Comments Routes */
Route::post('/posts/{post}/comments', 'CommentsController@store');

/* Authentication */
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

/* Admin Panel */
Route::get('/admin', 'AdminController@index');
Route::delete('/admin/delete/{post}', 'PostsController@delete');
Route::get('/admin/edit/{post}', 'PostsController@edit');
Route::post('/admin/update/{post}', 'PostsController@update');

/* Users Panel */
Route::get('/users/index', 'UsersController@index');
Route::delete('/users/delete/{user}', 'UsersController@delete');
Route::get('/users/edit/{user}', 'UsersController@edit');
Route::post('/users/update/{user}', 'UsersController@update');
Route::post('/users/reset-password/{user}', 'UsersController@resetPassword');


/* Players Panel */
Route::get('/players/index', 'PlayerController@index');
Route::get('/players/edit-list', 'PlayerController@editList');
Route::get('/players/create', 'PlayerController@create');
Route::post('/players', 'PlayerController@store');
Route::get('/players/edit/{player}', 'PlayerController@edit');
Route::post('/players/update/{player}', 'PlayerController@update');
Route::delete('/players/delete/{player}', 'PlayerController@destroy');

/* Staff Panel */
Route::get('/staff/index', 'StaffController@index');
Route::get('/staff/edit-list', 'StaffController@editList');
Route::get('/staff/create', 'StaffController@create');
Route::post('/staff', 'StaffController@store');
Route::get('/staff/edit/{staff}', 'StaffController@edit');
Route::post('/staff/update/{staff}', 'StaffController@update');
Route::delete('/staff/delete/{staff}', 'StaffController@destroy');
