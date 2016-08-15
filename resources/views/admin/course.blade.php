@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row">

			<div class="col-lg-12  col-md-12">


				<div class="nd-bg-white container-padding">
					
				  <h3>Curso:</h3> {{$course->name}}
				  <h3>Disciplina:</h3>{{$course->disciplina}}
				  <h3>Descrição:</h3> {{$course->description}}<br><br>

				  <a href="/admin/courses/{{$course->id}}/edit" class="btn btn-primary" style="margin-left:5px;" >Editar Curso</a>

				  <a href="/admin/courses/{{$course->id}}/video/add" class="btn btn-primary" style="margin-left:5px;" >Adicionar Aula</a>
				  
				</div>
										 
				<h3>Videos</h3>						
				<table class="table table-striped">

					

					<tr>
     					<th>#</th><th>Nome</th><th>Duração</th><th>Acção</th>
					</tr>

					
				@foreach($videos as $video)	

					<tr>
							<td class="nd-text-small">{{$listNumber++}}</td>
							<td class="nd-text-small">{{$video->name}}</td>
							<td class="nd-text-small">{{$video->duration}}</td>
							<td class="nd-text-small">

							<a style="margin-left:5px;" href="/admin/courses/{{$course->id}}/video/{{$video->id}}" class="btn nd-right btn-primary">Gerir</a>

							<form method="post" action="/admin/courses/{{$course->id}}/video/{{$video->id}}/delete">

							    <input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="_method" value="delete">
								<input type="submit" value="Eleminar" style="margin-left:5px;" class=" nd-right btn btn-primary">
								
							</form>

							</td>

					</tr>
				@endforeach
					

				</table>


		
			</div>

		</div>

@stop
