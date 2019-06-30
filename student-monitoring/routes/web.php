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
Route::post('/register_prof', 'Auth\RegisterController@create_prof')->name('register_prof');
Route::post('/register_student', 'Auth\RegisterController@create_student')->name('register_student');


Route::get('/aluno', function(){
	return view('aluno') ;
});

Route::get('/professor', function(){
	return view('professor');
});
//HomeController
Route::get('/home', 'HomeController@index')->name('home');

//FormControler

Route::get('/form/{id}', 'FormController@index')->name('form');
Route::post('/form/save', 'FormController@store')->name('formsave');


//Formexit -> Index
// Route::get('/formexit', ['as' => 'formexit', 'uses' => 'FormexitController@index']);
//Formexit -> Index
// Route::post('/formexit/save','FormexitController@store')->name('formExitStore');



//FormTitleController
Route::get('/formulariotitle', 'FormtitleController@index')->name('criarform');
Route::post('/formulariotitle/save', 'FormtitleController@store')->name('salvarform');

//???
Route::get('/index', function(){
	return view ('home2');
})->name('index');

//RespostaController
Route::get('/resposta','RespostaController@index')->name('resposta');

//PerguntasController
Route::get('/pergunta/{id}','PerguntasController@index')->name('perg');
Route::post('/pergunta/save','PerguntasController@store')->name('pergSave');


//StatusController
Route::get('/status','StatusController@index')->name('status');
//VizualizarController
Route::get('/visu','VisualizarController@index')->name('visu');