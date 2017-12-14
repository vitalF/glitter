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

/*Route::get('/welcome', function () {
    return view('welcome');
});*/

/*Route::get('/index', function () {
   return view('index');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/', 'PostController');

Route::get('/{id}', 'PostController@show');

Route::get('/user/{user_id}', 'UsersController@showUserPosts');

Route::get('/profile', function (){
    return view('auth.profile');
});
