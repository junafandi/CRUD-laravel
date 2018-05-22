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

Auth::routes();

// Route::get('/home', 'HomeController@index');


// Route::get('/home/create', 'HomeController@create')->name('create');
// Route::post('/blog' , 'HomeController@store')->name('blog');


Route::resource('home', 'HomeController');


Route::resource('barang', 'BarangController');