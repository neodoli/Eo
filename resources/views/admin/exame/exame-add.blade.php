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

	<form method="post" action="/admin/exame/store" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">




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

			<label for="type">Tipo de Exame</label>

			<select name="type" required="true", class="form-control">

				<option value="null">Selecione o nivel</option>

				@foreach($categories as $categorie)

					<option value="{{$categorie->type}}">{{$categorie->name}}</option>

				@endforeach
				

			</select>

		<div class="form-group">
			<label for="year">Ano do Exame</label>
			<input type="text" name="year" placeholder="Ano"  class="form-control" required="true">
		</div>
			

		</div>

		<div class="form-group">

			<label for="name"> Época</label>
			<select name="season" class="form-control" required="true">>

				<option value="0">Selecione a Época</option>
				<option value="1">1ª Época</option>
				<option value="2">2ª Época</option>
				<option value="3">Admissão</option>


				
			</select>

		</div>

		<div class="form-group">

			<label for="description">Descrição</label>

			<textarea name="description" value="{{old('description')}}" placeholder="Descrição"  class="form-control" required="true">
				

			</textarea>
			
		</div>



		<div class="form-group">

			<label for="image">Imagem</label>	
			<input type="file"    name="file" class="form-control" required="true">

		

		</div>


		<div class="form-group">
			
			<input type="submit" value="Adicionar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border">

		</div>



	</form>


	</div>


</div>


@stop
