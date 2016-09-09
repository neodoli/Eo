@extends('layout/admin')

@section('title', 'Disciplinas')

@section('content')

	<div class="row">

		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

			<p> 
				<a href="/admin/subjects/{{$idSubject}}/classe/create" class="btn btn-primary">Adicionar tipo de Exame</a>
			</p>

			<table class="table table-striped">

				<tr><th>Tipo</th> <th> Descrição</th> <th> Acções</th></tr>

				@foreach($subjectClasses as $subjectClasse)
					<tr>
						<td>{{$subjectClasse->type}}</td>
						<td>{{$subjectClasse->description}}</td>
						<td>


							<form method="post" action="/admin/subjects/{{$idSubject}}/classe/{{$subjectClasse->id}}/delete">

								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="_method" value="delete">
								<input type="submit" value="Eliminar" class="btn btn-primary nd-right">

							</form>
							



							<a href="/admin/subjects/{{$idSubject}}/classe/{{$subjectClasse->id}}/edit" class="btn btn-primary nd-right">Editar</a>
						</td>
					</tr>
				@endforeach
					

				
			</table>
			

		</div>
		

	</div>



@stop