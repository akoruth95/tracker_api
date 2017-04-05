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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/foods', 'FoodController@create');
Route::get('/foods', 'FoodController@retrieveAll');
Route::get('/foods/{id}', 'FoodController@retrieve');
Route::put('/foods/{id}', 'FoodController@update');
Route::delete('/foods/{id}', 'FoodController@destroy');
