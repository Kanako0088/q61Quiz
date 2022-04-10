<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('before', 'App\Http\Controllers\UserController@before')->name('before');
Route::get('home', 'App\Http\Controllers\UserController@home')->name('home');
Route::post('/inputname', 'App\Http\Controllers\UserController@inputname')->name('inputname');
Route::get('attention', 'App\Http\Controllers\UserController@attention')->name('attention');
Route::get('/name', 'App\Http\Controllers\UserController@name')->name('name');
// Route::post('/home', 'App\Http\Controllers\UserController@inputname')->name('inputname');
Route::get('/term', 'App\Http\Controllers\QuizController@term')->name('term');
Route::get('/quiz/{term_id}', 'App\Http\Controllers\QuizController@quiz')->name('quiz');
Route::post('/quiz', 'App\Http\Controllers\QuizController@update')->name('update');
