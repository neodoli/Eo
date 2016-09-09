@extends('layout/admin')

@section('title', 'Disciplina')

@section('content')

	<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	@if($errors->has('name'))

		<p style="color:red">
			Verifique se digitou correctamente os campos. Todos os campos são obrigatorios.
		</p>


	@endif

	@if(Session::has('error'))

		<p style="color:red">
			{{Session::get('error')}}
		</p>
	@endif

	<form method="post" action="/admin/subjects/{{$subject->id}}/update" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">

			<label for="name"> Nome da Disciplina</label>
			<input type="text" value="{{$subject->name}}"  name="name" class="form-control" required="true">

		</div>

		
	
		<div class="form-group">
			
			<input type="submit" value="Actualizar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border">

		</div>



	</form>


	</div>


</div>


@stop
