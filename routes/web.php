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

Route::get('/', function () {
    return view('welcome');
});

/* ========================
*    AUTH
==========================*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('loggedout');


//Route::middleware(['auth','revalidate'])->group(function(){

    /* ========================
*    PROFILE
==========================*/
Route::get('/view-profile', 'UserController@viewprofile');//Works
Route::get('/edit-profile', 'UserController@index');//Works
Route::post('/edit-profile/{id}', 'UserController@update')->name('update');

/* ========================
*    USERS
==========================*/
Route::get('/view-users', 'UserController@viewUsers');//Works
Route::resource('user', 'UserController');
Route::get('/add-users', 'UserController@addUsers');
Route::post('/add-user', 'UserController@create_user')->name('add-user');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
