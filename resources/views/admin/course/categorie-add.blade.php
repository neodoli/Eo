@extends('layout/admin')

@section('title', 'Categoria')

@section('content')

	<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	@if($errors->has('name')|| $errors->has('price')|| $errors->has('type'))

		<p style="color:red">
			Verifique se digitou correctamente os campos. Todos os campos são obrigatorios.

		</p>


	@endif


	<form method="post" action="/admin/courses/categorie/store" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">

			<label for="name"> Nome da Categoria</label>
			<input type="text" value="{{old('name')}}" placeholder="Ex: Iniciante,Intermediario, Avançado " name="name" class="form-control" required="true">

		</div>

		


		<div class="form-group">

			<label for="image">Tipo</label>	
			<input type="number"  value="{{old('type')}}"  name="type" class="form-control" required="true" placeholder="Ex: 1,2,3">


		</div>


		<div class="form-group">
			
			<input type="submit" value="Adicionar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border">

		</div>



	</form>


	</div>


</div>


@stop
