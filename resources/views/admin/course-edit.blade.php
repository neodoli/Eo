@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	@if($errors->has('name')|| $errors->has('description')|| $errors->has('subject')|| $errors->has('image'))

		<p style="color:red">
			Verifique se digitou correctamente os campos. Todos os campos são obrigatorios.
			{{$errors->first('name')}}
			{{$errors->first('description')}}
			{{$errors->first('subject')}}
			{{$errors->first ('image')}}
			


		</p>


	@endif

	
	<form method="post" action="/admin/courses/{{$id}}/update" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">

			<label for="name"> Nome do Curso</label>
			<input type="text" value="{{$course->name}}" placeholder="Nome do Curso" name="name" class="form-control" required="true">

		</div>

		<div class="form-group">

			<label for="description">Descrição</label>

			<textarea name="description" value="{{$course->description}}" placeholder="Descrição"  class="form-control" required="true">
				{{$course->description}}

			</textarea>
			
			

		</div>

		<div class="form-group">

			<label for="description">Disciplina</label>

			<input type="text" required="true" name="subject"  value="{{$course->disciplina}}"  class="form-control" >
				

			</textarea>
			
			

		</div>

		<div class="form-group">

			<label for="contact">Disciplina</label>

			<select   class="form-control">

				<option value="null">Selecione a Discplina</option>
				<option value="matematica">Matematica</option>
				<option value="fisica">Fisica</option>
				<option value="quimica">Quimica</option>
				<option value="desenho">Desenho</option>
				<option value="biologia">Biologia</option>
				
			</select>

			

		</div>

		<div class="form-group">

			<label for="image">Selecione a nova Imagem</label>	
			<input type="file"  value="/public/course/{{$course->image}}"  name="image" class="form-control" >



		</div>

		<div class="form-group">

			<label> Antiga Imagem </label>

			<p>
				<img src="/public/uploads/course/{{$course->image}}" >

			</p>

			
			

		</div>


		<div class="form-group">
			
			<input type="submit" value="Actualizar"  class="nd-btn-md nd-bg-blue nd-cl-white nd-no-border nd-right">

		</div>



	</form>


	</div>


</div>


@stop
