@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	@if($errors->has('name')|| $errors->has('url')|| $errors->has('duration'))

		<p style="color:red">
			Verifique se digitou correctamente os campos. Todos os campos são obrigatorios.

		</p>


	@endif

	

	<form method="post" action="/admin/courses/{{$id}}/video/{{$video->id}}/update" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">

			<label for="name"> Nome da Aula</label>
			<input type="text" value="{{$video->name}}" placeholder="Nome da aula" name="name" class="form-control" required="true">

		</div>

		<div class="form-group">

			<label for="description">Url</label>

			<input type="url" name="url" value="{{$video->url}}" placeholder="link do Video"  class="form-control" required="true">
				

			</textarea>
			
			

		</div>


		<div class="form-group">

			<label for="image">Duração</label>	
			<input type="text"    name="duration" value="{{$video->duration}}" class="form-control" required="true">


		</div>


		<div class="form-group">
			
			<input type="submit" value="Actualizar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border">

		</div>



	</form>


	</div>


</div>


@stop
