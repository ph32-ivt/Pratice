@extends('layouts.master')
@section('content')
	<h1>List all Posts of Country : {{$country->name}}</h1>
	<table>
		<thead>
			<tr>
				<td>Post ID</td>
				<td>Post Content</td>
				<td>User ID</td>
				<td>Created At</td>
			</tr>
		</thead>
		<tbody>
			@foreach($country->posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->content}}</td>
					<td>{{$post->user_id}}</td>
					<td>{{$post->created_at}}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
@endsection