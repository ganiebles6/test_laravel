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

Route::get('notes','NotesController@Index');

Route::get('notes/create','NotesController@CreateNote');

Route::post('notes','NotesController@GetNote');

Route::get('notes/{note}','NotesController@ShowNote')->where('note', '[0-9]+');


