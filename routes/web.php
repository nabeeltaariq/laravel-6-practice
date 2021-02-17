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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionaire', 'QuestionaireController@index')->name('questionaires');
Route::get('/questionaire/create', 'QuestionaireController@create')->name('questionaires.create');
Route::post('/questionaire', 'QuestionaireController@store')->name('questionaire');
Route::get('/questionaire/{questionaire}', 'QuestionaireController@show')->name('questionaire.show');
