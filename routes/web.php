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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'QuestionController');
Route::get('questions/{question}/edit-time', 'QuestionController@editTime')->name('questions.edit_time');
Route::post('questions/{question}/update-time', 'QuestionController@updateTime')->name('questions.update_time');

Route::resource('quizzes', 'QuizController');

Route::get('results', 'ResultController@index')->name('results.index');

