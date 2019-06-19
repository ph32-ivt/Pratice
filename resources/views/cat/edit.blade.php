@extends('layouts.master')
@section('content')
	<h1>Edit cat {{$cat->name}}</h1>
	<form action="{{route('cats.update', $cat->id)}}" method="POST">
		@csrf
		@method('PUT')
		<label>Name</label>
		<input type="text" name="name" value="{{$cat->name}}">
		<label>Age</label>
		<input type="text" name="age" value="{{$cat->age}}">
		<label>Breed ID</label>
		<select name="breed_id">
			@foreach( $listBreedId as $breed)
				<option value="{{ $breed->id}}" {{ $breed->id == $cat->breed_id ? 'selected' : ''}}> {{$breed->name}}</option>

			@endforeach
		</select>
		<button type="submit">Update</button>


		
	</form>

@endsection