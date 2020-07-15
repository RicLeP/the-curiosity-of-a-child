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

//Route::view('pixi', 'pages.pixi');

Route::get('/', '\App\Http\Controllers\EpisodeController@index');
Route::get('/{slug?}', '\App\Http\Controllers\EpisodeController@show')->where('slug', '(.*)');