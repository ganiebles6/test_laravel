<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class NoteTest extends TestCase
{
	use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
    	//Having
    	Note::create(['note'=>'My first note']);
    	Note::create(['note'=>'My second note']);
    	//When
        $this->visit('notes')
        //Then
        ->see('My first note')
        ->see('My second note');
    }

    public function ShowNotesTest(){
    	$this->post()
    	->see('Mostrando mi primera nota');
    }
}
