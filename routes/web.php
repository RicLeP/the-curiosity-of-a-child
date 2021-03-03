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

Route::get('/poly', '\App\Http\Controllers\PolybookController@index');
Route::get('/ep/{number}', '\App\Http\Controllers\EpisodeUrlShortenerController@index');

Route::get('/', '\App\Http\Controllers\EpisodeController@index');
Route::get('/{slug?}', '\App\Http\Controllers\EpisodeController@show')->where('slug', '(.*)');

Route::get('ffff', function () {

})->name('clear-storyblok-cache');