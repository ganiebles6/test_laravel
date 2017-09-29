@extends('layout')
@section('content')
<h1>Crear una nota</h1>
@include('partials\ShowErrorsForm')
<form method="POST" action="{{url('notes')}}">
	{!!csrf_field()!!}

	<textarea name="note" class="materialize-textarea" placeholder="Escribe la nota aqui">{{old('note')}}</textarea>
  	<button class="btn waves-effect waves-light" type="submit">Crear nota</button>
	
</form>
@endsection