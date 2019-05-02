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

//HomeController
Route::get('/home', 'HomeController@index')->name('home');

//FormControler
Route::resource('/form', 'FormController', ['as' => 'form', 'uses' => 'FormController@index']);
Route::post('form/save', 'FormController@store')->name('form');

//Formexit
Route::get('/formexit', ['as' => 'formexit', 'uses' => 'FormexitController@index']);
Route::post('/formexit/save','FormexitController@store')->name('formexit');

//FormTitleController
Route::get('/formulariotitle', ['as' => 'formulariotitle', 'uses' => 'FormtitleController@index']);

//???
Route::get('/index', function(){
	return view ('home2');
});

//RespostaController
Route::get('/resposta','RespostaController@index')->name('resposta');
