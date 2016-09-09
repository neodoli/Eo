
@extends('layout/admin')

@section('title', 'Disciplina')

@section('content')

	<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	@if($errors->has('type')||$errors->has('description')||$errors->has('file'))

		<p style="color:red">
			Verifique se digitou correctamente os campos. Todos os campos são obrigatorios.

		</p>


	@endif

	@if(Session::has('error'))

		<p style="color:red">
			{{Session::get('error')}}
		</p>
	@endif

	<form method="post" action="/admin/subjects/{{$id}}/classe/{{$subjectClasse->id}}/update" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">


		
		<div class="form-group">

			<label for="type">Selecione o tipo de Exame</label>

			<select class="form-control" name="type" required="true">

				<option value="0">Selecione o tipo de Exame</option>
				<option value="1">10ª clasee</option>
				<option value="2">12ª clasee</option>
				<option value="3">Admissão</option>
				
			</select>
			
		</div>

		<div class="form-group">

			<label for="description"> Descrição do tipo de Exame </label>

			<textarea name="description" required="true" class="form-control">
				{{$subjectClasse->description}}
			</textarea>

		</div>

		<div class="form-group">

			<label for="file">Imagen do Exame</label>

			<input type="file" name="file" class="form-control" >
			

		</div>

		<div class="form-group">

			<img src="{{storage_path()}}/app/exame/{{$subjectClasse->url}}">
			

		</div>
		
	
		<div class="form-group">
			
			<input type="submit" value="Actualizar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border">

		</div>



	</form>


	</div>


</div>


@stop
