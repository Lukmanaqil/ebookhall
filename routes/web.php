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
Route::get('/', function() {
    return view('welcome');
});
Route::get('/book', 'App\Http\controllers\MasterLibraryController@index')->middleware('auth');
Route::post('/book', 'App\Http\controllers\MasterLibraryController@addtoUserLibrary')->middleware('auth');
Route::get('/book/search', 'App\Http\controllers\SearchController@search')->middleware('auth');
Route::get('/book/{isbn}', 'App\Http\controllers\BookViewController@view')->middleware('auth');
Route::get('/userlibrary', 'App\Http\controllers\userLibraryController@view')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
