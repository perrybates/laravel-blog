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


Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/login','LoginController@index')->name('login');

Route::post('/logout','LogoutController@store')->name('logout');


Route::post('/login','LoginController@store')->name('login');

Route::get('/register','Auth\RegisterController@index')->name('register');
Route::post('/register','Auth\RegisterController@store')->name('register');

Route::get('/posts', function () {
    return view('posts.index');
});
