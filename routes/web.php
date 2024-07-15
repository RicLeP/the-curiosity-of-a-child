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

//Route::get('/sitemap', '\App\Http\Controllers\SitemapController@index');
//Route::get('/social-grace/{slug}', '\App\Http\Controllers\SocialGraceController@show')->where('slug', '(.*)')->name('manner');
//
//Route::get('/poly', '\App\Http\Controllers\PolybookController@index');
//Route::get('/reddit/{slug}', '\App\Http\Controllers\EpisodeRedditController@show');
//Route::get('/ep/{number}', '\App\Http\Controllers\EpisodeUrlShortenerController@index');
//////////////////// preview URL with /storyblok-live/  ?
//Route::post('/{slug?}', '\App\Http\Controllers\EpisodeController@live')->where('slug', '(.*)');
//Route::get('/', '\App\Http\Controllers\EpisodeController@index');
//Route::get('/{slug?}', '\App\Http\Controllers\EpisodeController@show')->where('slug', '(.*)')->name('episode.show');

error
Route::get('/{slug?}', \App\Http\Controllers\RedirectController::class)->where('slug', '(.*)');
