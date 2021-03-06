@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	@if($errors->has('name')|| $errors->has('description')|| $errors->has('subject')|| $errors->has('image')||$errors->has('stage'))

		<p style="color:red">
			Verifique se digitou correctamente os campos. Todos os campos são obrigatorios.

		</p>


	@endif

	<p style="color:red">{{$error}}</p>

	<form method="post" action="/admin/courses/store" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">

			<label for="name"> Nome do Curso</label>
			<input type="text" value="{{old('name')}}" placeholder="Nome do Curso" name="name" class="form-control" required="true">

		</div>

		<div class="form-group">

			<label for="description">Descrição</label>

			<textarea name="description" value="{{old('description')}}" placeholder="Descrição"  class="form-control" required="true">
				

			</textarea>
			
			

		</div>

		<div class="form-group">

			<label for="contact">Disciplina</label>

			<select name="subject" required="true" class="form-control">

				<option value="null">Selecione a disciplina</option>


				@foreach($subjects as $subject)

					<option value="{{$subject->id}}">{{$subject->name}}</option>

				@endforeach

			
				
			</select>

			

		</div>

		<div class="form-group">

			<label for="stage">Nivel do Curso</label>

			<select name="stage" required="true", class="form-control">

				<option value="null">Selecione o nivel</option>

				@foreach($categories as $categorie)

					<option value="{{$categorie->type}}">{{$categorie->name}}</option>

				@endforeach
				

			</select>
			

		</div>

		<div class="form-group">

			<label for="description">Preço</label>

			<input type="text" name="price" value="{{old('price')}}" placeholder="200"  class="form-control" required="true">
				
			

		</div>

		<div class="form-group">

			<label for="image">Imagem</label>	
			<input type="file"    name="image" class="form-control" required="true">

		

		</div>


		<div class="form-group">
			
			<input type="submit" value="Adicionar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border">

		</div>



	</form>


	</div>


</div>


@stop
