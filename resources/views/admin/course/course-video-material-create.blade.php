@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	@if($errors->has('name')|| $errors->has('file')))

		<p style="color:red">
			Verifique se digitou correctamente os campos. Todos os campos são obrigatorios.

		</p>


	@endif

		<p style="color:red">
			{{$error}}
		</p>
	

	<form method="post" action="/admin/courses/{{$id}}/video/{{$idVideo}}/material/create" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">

			<label for="name"> Nome do material</label>
			<input type="text" value="{{old('name')}}" placeholder="Nome do material" name="name" class="form-control" required="true">

		</div>

		<div class="form-group">

			<label for="description">Carregar Material</label>

			<input type="file" name="file"  placeholder="link do Video"  class="form-control" required="true">
				

		</div>


	
		<div class="form-group">
			
			<input type="submit" value="Adicionar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border">

		</div>



	</form>


	</div>


</div>


@stop
