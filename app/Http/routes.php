<?php
use App\Note;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function(){
	$notes = Note::all();
	return view('notas/notes', compact('notes'));
});

Route::post('notes', function(){
	return "Creando metodo post";
});

Route::get('notes/{id?}/{slug?}', function($id, $slug=null){
	return view('notas/create');
})->where('id', '[0-9]+');
