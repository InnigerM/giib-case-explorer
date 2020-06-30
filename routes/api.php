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
Route::get('posts/favorite', 'PostController@favorite');
Route::get('posts/byTag/{tag}', 'PostController@filter');
Route::get('posts/{id}', 'PostController@show');
Route::get('posts/{id}/tags', 'PostController@tags');
Route::get('posts/{id}/paragraphs', 'PostController@paragraphs');
Route::get('posts/{id}/bmc', 'PostController@businessCanvas');
Route::get('tags', 'TagContoller@index');
Route::get('tags/{id}', 'TagsController@show');
