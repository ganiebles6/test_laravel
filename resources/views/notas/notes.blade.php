@extends('layout')

	@section('content')
	<h1>Notas</h1>
	<ul>
		@foreach ($notes as $note)
		<li>
			{!! $note->note !!}
		</li>
		@endforeach
		@if(false)
		<strong>Guillermo</strong>
		@else
		<i>Niebles</i>
		@endif
	</ul>
	<form action="#" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}" style="width: 400px;">
		<input type="text" name="nombre">
		<input type="submit">
	</form>
	@endsection
