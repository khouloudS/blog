<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('photo', 'PhotoController');

Route::middleware('auth')->group(function (){
Route::prefix('computers')->group(function (){

    Route::get('/', 'computerController@index')->name('computer.index');
    Route::get('/create', 'computerController@create')->name('computer.create');
    Route::post('/store', 'computerController@store')->name('computer.store');
    Route::get('/{id}/show', 'computerController@show')->name('computer.show');

});
});
