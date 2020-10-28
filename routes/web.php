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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'App\Http\Controllers\HomePageController@home');
Route::get('/about', 'App\Http\Controllers\HomePageController@about');
Route::get('/portfolio', 'App\Http\Controllers\HomePageController@portfolio');
Route::get('/portfoliodetail', 'App\Http\Controllers\HomePageController@portfoliodetails');