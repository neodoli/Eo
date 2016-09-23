@extends('layout/admin')

@section('title', 'Inscrições')

@section('content')

	<table class="table table-striped">

		<tr><th>Curso</th> <th>Dia da inscrição</th><th>Data final</th><th>Preço Mensal</th><th>Acções</th></tr>

		@foreach($signups as $signup)
		
		<tr>
			<td>{{$signup->course->name}}</td>

			<td>{{$signup->start_at}}</td>

			<td>{{$signup->end_at}}</td> 

			<td>{{$signup->course->price}}</td>

			<td>
				 <a href="/admin/course/signup/{{$signup->id_user}}/{{$signup->id_course}}" class="btn btn-primary" >Verificar
				 </a>
			</td>
		 </tr>
		

		@endforeach
	</table>

@stop