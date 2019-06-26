@extends('layouts.master')
@section('content')
<form action="{{route('cat-store')}}" method="POST">
	

	<label>name</label>
	<input type="text" name="name" value="{{old('name')}}">
	@if($errors->has('name'))
		<span style="color: red;">{{$errors->first('name')}}</span>
	@endif

	<label>age</label>
	<input type="text" name="age" value="{{old('age')}}">
	@if($errors->has('age'))
		<span style="color: red;">{{$errors->first('age')}}</span>
	@endif
	<label>breed Id</label>
	<input type="text" name="breed_id" value="{{old('breed_id')}}">
	@if($errors->has('breed_id'))
		<span style="color: red;">{{$errors->first('breed_id')}}</span>
	@endif
	<button>create</button>
</form>
@endsection