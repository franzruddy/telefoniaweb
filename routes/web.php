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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UserController@index');

/*Route::get('/usuarios1', function (){
    return view ('usuarios1.index');
});
Route::get('/usuarios1', 'Usuarios1Controller@index');*/


Route::resource('usuarios1', 'Usuarios1Controller');
