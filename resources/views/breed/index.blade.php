@extends('layouts.master')
@section('content')

	<!-- /code html -->
	<h1>List Breeds</h1>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Create At</td>
				<td>Update At</td>
			</tr>
		</thead>
		<tbody>
			@foreach( $listBreeds as $breed)
				<tr>
					<td>{{ $breed->id }}</td>
					<td>{{ $breed->name }}</td>
					<td>{{ $breed->created_at }}</td>
					<td>{{ $breed->updated_at }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@endsection