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

Route::get('/cadastro', function (){
	return view('cadastro');
});	

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/form', 'ControllerForm@criarForm');
Route::resource('form', 'FormController');
Route::get('/formexit', ['as' => 'formexit', 'uses' => 'FormexitController@index']);
