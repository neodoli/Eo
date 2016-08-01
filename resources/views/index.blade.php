@extends('layout/main')

@section('header')

	

@endsection
@section('title','HOME')
    
@section('banner')
    <br><br>
    <p class="banner-title">Aprenda melhor. <br> Em qualquer lugar. A qualquer hora. </p>
    <br><br>

    <a href="#" class="nd-btn-md nd-cl-white nd-bg-pink center"> Registrar</a>
@endsection

@section('content')
	<div class="row">
		<br><br>

		<center><h2> Nossas Aulas </h2> </center>

			<br>

		@foreach($courses as $course)

		<div class="col-lg-4 container-padding " >
			<div class=" text-center container-padding div-item-blue" 
			style="background-image:url('{{$course->image}}')">
			
				
				<p class="value-title nd-cl-white"> {{$course->name}}</p>

				<br><br>

				<p class="nd-cl-white nd-bold"> {{$course->description}}</p>

				<p class="nd-cl-white value-title"> {{$course->disciplina}} </p>

				<br><br>
				
				<a href="/courses/{{$course->name}}" class="nd-btn-md nd-cl-blue nd-border nd-border-cl-blue nd-bg-white nd-bold" >comecar</a>
			</div>
				
		
		</div>

		@endforeach

	</div>

		<center><a href="/courses" class="btn nd-btn-md nd-bg-blue nd-cl-white">Ver Todas Aulas</a> </center>

		<br><br>

	   <center>	<h2> Nossos Exames </h2> </center>
	   	<br>

		<div class="col-lg-4 container-padding ">
			<div class=" text-center container-padding div-item-blue" style="background-image:url('/public/image/math.jpg')">
			
				
				<p class="value-title nd-cl-white"> Matematica</p>

				<br><br>

				<p class="nd-cl-white nd-bold"> aprenda os principios da algebra de sucessões</p>

				<p class="nd-cl-white value-title"> 25 Exames </p>

				<br><br>

				<a href="" class="nd-btn-md nd-cl-blue nd-border nd-border-cl-blue nd-bg-white nd-bold" >comecar</a>
			</div>
		</div>
		<div class="col-lg-4 container-padding ">
			<div class=" text-center container-padding div-item-blue" style="background-image:url('/public/image/fisic.jpg')">
			
				
				<p class="value-title nd-cl-white"> Fisica</p>

				<br><br>

				<p class="nd-cl-white nd-bold"> aprenda os principios da algebra de sucessões</p>

				<p class="nd-cl-white value-title"> 25 Exames </p>

				<br><br>
				
				<a href="" class="nd-btn-md nd-cl-blue nd-border nd-border-cl-blue nd-bg-white nd-bold" >comecar</a>
			</div>
		</div>
		<div class="col-lg-4 container-padding ">
			<div class=" text-center container-padding div-item-blue" style="background-image:url('/public/image/des.jpg')">
			
				
				<p class="value-title nd-cl-white"> Geometria descritiva</p>

				<br><br>

				<p class="nd-cl-white nd-bold"> aprenda os principios da algebra de sucessões</p>

				<p class="nd-cl-white value-title"> 25 Exames </p>

				<br><br>
				
				<a href="" class="nd-btn-md nd-cl-blue nd-border nd-border-cl-blue nd-bg-white nd-bold" >comecar</a>
			</div>
		</div>
		

	</div>

	<center><a href="/exames" class="btn nd-btn-md nd-bg-blue  nd-cl-white">Ver Todas Exames</a> </center> 

		<br><br>
@endsection

@section('testemunho')
   <div class="row">

		<div class="col-lg-4">
		
			<iframe width="400" height="250"
			src="http://www.youtube.com/embed/XGSy3_Czz8k">
			</iframe>
		</div>

		<div class="col-lg-4">
			
			<iframe width="400" height="250"
			src="http://www.youtube.com/embed/XGSy3_Czz8k">
			</iframe>
		</div>

		<div class="col-lg-4">
		

			<iframe width="400" height="250" 
			src="https://www.youtube.com/embed/dAgfnK528RA" frameborder="0" >
			</iframe>
		</div>

	
		

	</div>
@endsection




