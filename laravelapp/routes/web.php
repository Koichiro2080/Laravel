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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','HelloController@index'); 

// Route::get('___(1)___', '___(2)___');
Route::get('jissyu3_1', 'jissyu3_1Controller@index');
Route::post('jissyu3_1', 'jissyu3_1Contoroller@post');
