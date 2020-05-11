<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('posts', 'PostController@store');
Route::patch('posts/{id}', 'PostController@update');
Route::get('posts', 'PostController@index');
Route::get('posts/byTag/{tag}', 'PostController@filter');
Route::get('posts/{id}', 'PostController@show');
