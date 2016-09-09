@extends('layout/main3')

@section('title','Painel')

@section('content')
	<br><br>



	<div >
		<ul class="nav  nav-pills">

			<li class=" nd-cl-blue" > <a href="/dashboard"> Minhas Incrições</a> </li>
			<li class=" nd-cl-blue"  > <a href="/dashboard/requested">Aguardando Confirmação</a></li>
			<li class=" nd-cl-blue active" > <a href="/dashboard/old">Incrições Expiradas </a></li>
			

		</ul>

		<br>

	
	<div class="row">

	@foreach($userCourses as $userCourse)

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-bottom:10px;">

		
			<div style="background-image: url('/public/uploads/course/{{$userCourse->course->image}}');">

				<div style="opacity: 0.8; height:200px; background:#000;">
					<br><br><br><br>

					<center>
					<p class="value-title" style="color:#fff;">{{ $userCourse->course->name}}</p>
					<p  style="color:#fff;">Términado em: {{$userCourse->end_at}}</p> 

					<a href="/courses/{{$userCourse->course->name}}" class="btn btn-primary"> Renovar Incrição	</a>
					</center>
				

				</div>
			
				
			</div>
	

			
		</div>

	@endforeach


			
		</div>

		
	</div>

	</div>

	<br><br>

	<center>
		<a href="/courses" class="btn btn-primary">Localizar Cursos</a>
	</center>

@endsection

