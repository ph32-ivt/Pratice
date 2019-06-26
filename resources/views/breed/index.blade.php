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
					<td class="breed-id" id="{{$breed->id}}">{{ $breed->id }}</td>
					<td>
						<a href="{{route('list-cat-by-breed-id', $breed->id)}}" >{{ $breed->name }}</a>
					</td>
					<td>{{ $breed->created_at }}</td>
					<td>{{ $breed->updated_at }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	<div id="show-cat"></div>
<script type="text/javascript">
	$(document).ready(function(){
		//javascript. jquery
		$('td').click( function(){
			var content =$(this).text();
			// alert(content);
			console.log(content);
		});

		$('.breed-id').click(function(){
			$('#show-cat').html('');
			var breedId =$(this).attr('id');
			$.ajax({
				url : 'api/breeds/'+breedId+'/cats',
				type : 'GET',
				data : {},
				success : function(data){
					console.log(data);
					if (data.length) {
						var html ='<table>' +
										'<thead>'+
											'<tr>'+
												'<td>'+
													'Cat ID'+
												'</td>'+
												'<td>'+
													'Cat name'+
												'</td>'+
												'<td>'+
													'Breed ID'+
												'</td>'+
											'</tr>'+
										'</thead'+
										'<tbody>';
						$.each(data, function(key,value){
							console.log(value);
							html+= 	'<tr>'+
										'<td>'+
											value.id+
										'</td>'+
										'<td>'+
											value.name+
										'</td>'+
										'<td>'+
											value.breed_id+
										'</td>'+
									'</tr>';
						});
						html+= '</tbody></table>';
						console.log(html)
						$('#show-cat').append(html);
					}

				},
				error : function(error){
					alert(error);
				}
			});
		});

	});
</script>
@endsection