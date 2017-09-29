<?php

namespace App\Http\Controllers;
use App\Note;
use App\Http\Requests;


class NotesController extends Controller
{
   public function Index()
   {
       # code...
        $notes = Note::all();
        return view('notes/list', compact('notes'));
   }

   public function CreateNote(){
        return view('notes/create');
   }

   public function GetNote(){

    $this->validate(request(), [
        'note' => ['required', 'max:10']
    ]);

       $dato = request()->only(['note']);
       Note::create($dato);
       return redirect()->to('notes');
   }

   public function ShowNote($note){
        dd($note);
   }
}
