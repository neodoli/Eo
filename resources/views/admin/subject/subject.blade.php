@extends('layout/admin')

@section('title', 'Disciplinas')

@section('content')

	<div class="row">

		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

			<p> 
				<a href="/admin/subjects/create" class="btn btn-primary">Adicionar Disciplina</a>
			</p>

			<table class="table table-striped">

				<tr><th>Nome</th> <th> Acções</th></tr>

				@foreach($subjects as $subject)
				<tr>
					<td>{{$subject->name}}</td>
					<td>
						<a href="/admin/subjects/{{$subject->id}}/classe/create" class="btn btn-primary">Adicionar Tipo de Exame</a>
						<a href="/admin/subjects/{{$subject->id}}/edit" class="btn btn-primary">Editar</a>
						<a href="/admin/subjects/{{$subject->id}}/classe" class="btn btn-primary">Gerir</a>

						
					</td>
				</tr>

				@endforeach
					

				
			</table>
			

		</div>
		

	</div>



@stop