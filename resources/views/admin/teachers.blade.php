@extends('layout/admin')

@section('title', 'teachers');

@section('content')

	<div class="row">

			<div class="col-lg-12  col-md-12">

											
										 
										
				<table class="table table-striped">

					<tr>
     					<th>Nome</th><th>Email</th><th>Contacto</th><th>Criado em</th> <th>Açôes</th>
					</tr>

					@foreach($teachers as $teacher)

					<tr>
							<td class="nd-text-small">{{$teacher->name}}</td>
							<td class="nd-text-small">{{$teacher->email}}</td>
							<td class="nd-text-small">{{$teacher->contact}}</td>
							<td class="nd-text-small">{{$teacher->created_at}}</td>
							<td class="nd-text-small"><a href="/admin/users/{{$teacher->id}}" class="btn btn-danger">Disable</a></td>

					</tr>
					@endforeach
					

				</table>
		
			</div>

		</div>

@stop