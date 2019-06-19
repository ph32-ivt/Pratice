@extends('layouts.master')
@section('content')

	<h1>Create Breed</h1>
	<form action="{{ route('store-breed')}}" method="POST">
		@csrf
		<label for="name">Breed Name :</label>
		<input type="text" name="name">
		<button type="submit">Create</button>
	</form>
@endsection
