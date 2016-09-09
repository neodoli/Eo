@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row">

			<div class="col-lg-12  col-md-12">

											
										 
										
				<table class="table table-striped">

					<a href="/admin/courses/add" class="btn btn-primary" >Adicionar Curso</a>
					<a href="/admin/courses/categorie/add" class="btn btn-primary" style="margin-left:5px;">Adicionar Categoria</a>
					<br><br><br>
					<tr>
     					<th>Nome</th><th>preço</th><th>Activo</th><th>Açôes</th>
					</tr>

					@foreach($courses as $course)

					<tr>
							<td class="nd-text-small">{{$course->name}}</td>
							<td class="nd-text-small">{{$course->price}}</td>
							<td class="nd-text-small">{{$course->available}}</td>

							<td class="nd-text-small">

								<a style="margin-left:5px;" href="/admin/courses/{{$course->id}}" class="btn nd-right btn-primary">Gerir</a>
								<a style="margin-left:5px;" href="/admin/courses/{{$course->id}}/edit" class=" nd-right btn btn-primary">Editar</a>

								<form method="post" action="/admin/courses/{{$course->id}}/active" class=" nd-right">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<input type="submit" value="Activar" class=" btn btn-primary">
								</form>

								<a style="margin-left:5px;" href="/admin/courses/{{$course->id}}/edit" ></a>

							</td>

					</tr>
					@endforeach
					

				</table>
		
			</div>

		</div>

@stop
