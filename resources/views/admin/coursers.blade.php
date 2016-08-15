@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row">

			<div class="col-lg-12  col-md-12">

											
										 
										
				<table class="table table-striped">

					<a href="/admin/courses/add" class="btn btn-primary">Adicionar Curso</a>
					<br><br><br>
					<tr>
     					<th>Nome</th><th>Disciplina</th><th>Açôes</th>
					</tr>

					@foreach($courses as $course)

					<tr>
							<td class="nd-text-small">{{$course->name}}</td>
							<td class="nd-text-small">{{$course->disciplina}}</td>
							<td class="nd-text-small">

							<a style="margin-left:5px;" href="/admin/courses/{{$course->id}}" class="btn nd-right btn-primary">Gerir</a>
							<a style="margin-left:5px;" href="/admin/courses/{{$course->id}}/edit" class=" nd-right btn btn-primary">Editar</a>

							</td>

					</tr>
					@endforeach
					

				</table>
		
			</div>

		</div>

@stop
