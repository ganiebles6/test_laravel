@extends('layout')

	@section('content')
	<h1>Notas</h1>
	<a href="{{url('notes/create')}}">Añadir nota</a>
	<ul>
		@foreach ($notes as $note)
		<li>
			{!! $note->note !!}
		</li>
		@endforeach
	</ul>
	@endsection
