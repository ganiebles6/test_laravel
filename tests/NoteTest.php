<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class NoteTest extends TestCase
{
	use WithoutMiddleware;


    public function test_notes_list(){
    	//Having
    	Note::create(['note'=>'My first note']);
    	Note::create(['note'=>'My second note']);
    	//When
        $this->visit('notes')
        //Then
        ->see('My first note')
        ->see('My second note');
    }

    public function test_create_note(){
    	
    	$this->visit('notes')
    	->click('Añadir nota')
    	->seePageIs('notes/create')
    	->see('Crear una nota')
    	->type('Mi nueva nota', 'note')
    	->press('Crear nota')
    	->seePageIs('notes')
    	->see('Mi nueva nota')
    	->seeInDatabase('notes', ['note' => 'Mi nueva nota']);
    }
}
