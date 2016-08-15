@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row">

			<div class="col-lg-12  col-md-12">


				<div class="nd-bg-white container-padding">
					
				  <h3>Titulo: {{$video->name}}, Duração: {{$video->duration}}</h3> 

				

				  <iframe src="{{$video->url}}" height="400" width="100%" frameborder="0"></iframe>
				
				  <a href="/admin/courses/{{$courseId}}/video/{{$video->id}}/edit" class="btn btn-primary" style="margin-left:5px;" >Editar Video</a>

				  <a href="/admin/courses/{{$courseId}}/video/{{$video->id}}/material/create" class="btn btn-primary" style="margin-left:5px;" >Adicionar Material</a>
				

				</div>




										 
				<h3>Material de Apoio</h3>						
				<table class="table table-striped">

					<tr>
     					<th>#</th><th>Nome</th><th>Nome do Ficheiro</th><th>Acção</th>
					</tr>


				@foreach($materials as $material)	

					<tr>
							<td class="nd-text-small">{{$listNumber++}}</td>
							<td class="nd-text-small">{{$material->name}}</td>
							<td class="nd-text-small">{{$material->url}}</td>
							<td class="nd-text-small">
							<form method="post", action="/admin/courses/{{$courseId}}/video/{{$videoId}}/material/{{$material->id}}">

								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="_method" value="delete">
								<input type="submit" value="Eliminar" class="btn btn-primary">
								
							</form>

							

							</td>

					</tr>
				@endforeach
					

				</table>


				<h3>Comentários</h3>						
				<table class="table table-striped">

					
					<tr>
     					<th>Usúario</th><th>Comentário</th><th>Postado em</th>
					</tr>

					@foreach($comments as $comment)

					
					<tr>
							<td class="nd-text-small">{{$comment->description}}</td>
							<td class="nd-text-small">{{$comment->description}}</td>
							<td class="nd-text-small">{{$comment->created_at}}</td>
							

					</tr>
					@endforeach

				</table>
		
			</div>

		</div>

@stop
