@extends('layout/admin');

@section('title','Users');

@section('content')


		<div class="row">

			<div class="col-lg-12  col-md-12">

											
										 
										
				<table class="table table-striped">

					<tr>
     					<th>Nome</th><th>Email</th><th>Contacto</th><th>Criado em</th> <th>Açôes</th>
					</tr>

					@foreach($users as $user)

					<tr>
							<td class="nd-text-small">{{$user->name}}</td>
							<td class="nd-text-small">{{$user->email}}</td>
							<td class="nd-text-small">{{$user->contact}}</td>
							<td class="nd-text-small">{{$user->created_at}}</td>
							<td class="nd-text-small"><a href="/admin/users/{{$user->id}}" class="btn btn-danger">Disable</a></td>

					</tr>
					@endforeach
					

				</table>
		
			</div>

		</div>


@stop