@extends('layout/admin')

@section('title', 'Inscrições')

@section('content')

	<p> Descreva os motivos da ivalidação da inscrição </p>

	<form action="/admin/course/signup/3/8/problem" method="post" >

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">

			<textarea name="info" class="form-control" required="true">
				
			</textarea>

				
		</div>

		<div class="form-group">

			<input type="submit" value="Enviar" class="btn btn-primary">
				
		</div>


		

	</form>

@stop