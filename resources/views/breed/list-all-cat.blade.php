@extends('layouts.master')
@section('content')

	<h1>List all Cat belong to Breed :  {{$list3['name']}}</h1>
	<table>
		<thead>
			<tr>
				<td>Cat ID</td>
				<td>Cat Name</td>
				<td>Age</td>
				<td>Created at</td>
				<td>Updated at</td>
			</tr>
		</thead>
		<tbody>
			@foreach($list3['cats'] as $cat)
				<tr>
					<td>{{$cat['id']}}</td>
					<td>{{$cat['name']}}</td>
					<td>{{$cat['age']}}</td>
					<td>{{$cat['created_at']}}</td>
					<td>{{$cat['updated_at']}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection