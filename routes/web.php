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
    return view('/home');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();
Route::get('/admin/users', 'UsersController@index')->middleware('membre');
Route::post('/admin/users/create','UsersController@create')->middleware('acces','membre');
Route::get('/admin/users/edit/{id}', 'UsersController@edit')->middleware('acces');
Route::post('/admin/users/update/{id}', 'UsersController@update')->middleware('acces');
Route::post('/admin/users/delete/{id}','UsersController@destroy')->middleware('acces');

