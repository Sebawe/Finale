@extends('layout')

@section('content')

	<h1>My First Website</h1>
	<ul>
		@foreach($seems as $seem)
			<li>{{$seem}}</li>
		@endforeach
	</ul>
@endsection