@extends('layouts.master')
@section('content')
<form action="{{route('cat-store')}}" method="POST">
	@csrf
	<label>name</label>
	<input type="text" name="name">
	<label>age</label>
	<input type="text" name="age">
	<label>breed Id</label>
	<input type="text" name="breed_id">
	<button>create</button>
</form>
@endsection