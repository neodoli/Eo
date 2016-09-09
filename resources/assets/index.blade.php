@extends('layout/main')

@section('header')
	
	<center>
	<p class="container-padding title-value" style="font-size:20px; font-weight:bolder;">  20% de descontos para todos os cursos, Exames e teste Provinciais.  </p> 

	</center>

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


			<div class="col-lg-3  ">
					
						<div class="nd-bg-white margin-bottom    nd-overflow-hidden">
						
							<img src="/public/uploads/course/{{$course->image}}" class="nd-overflow-hidden" style="height: 200px; width: auto;" >

							<div class=" nd-bg-pink ">
								<p class="nd-cl-white nd-bg-blue  nd-padding-sm nd-bold"> 
									<span class="nd-right"> {{$course->courseCategorie->name}}, {{$course->courseCategorie->price}} Mtn / mês
									</span>
									<br> 
								</p>
								
							</div>

							<div class="nd-padding-sm">

								
								
								<p class="value-title nd-cl-pink nd-uppercase"> {{$course->name}}</p>

								<p class="nd-cl-black nd-uppercase"> aprenda os principios da algebra na pratica</p>
								<br>

								<center>


									@if($course->available==='yes')
											

											<a href="/courses/{{$course->name}}" class="nd-btn-md  nd-bold nd-cl-white  nd-bg-blue nd-captilize" >Inscrever </a> <br><br>
									@else
									
										<p  class="nd-btn-md nd-cl-blue nd-border nd-border-cl-blue nd-bg-white nd-bold">Brevemente</p>

									@endif
								
								

								</center>

							</div>


							<div class=" nd-bg-pink ">
								<p class="nd-cl-white nd-bg-blue  nd-padding-sm nd-bold"> {{$course->subject->name}} </p>
								
							</div>

							
						</div>


							
				
			</div>




		@endforeach

	</div>

		<center><a href="/courses" class="btn nd-btn-md nd-bg-pink nd-cl-white">Ver Todas Aulas</a> </center>

		<br><br>

	   <center>	<h2> Nossos Exames </h2> </center>
	   	<br>

	   	<div class="row">


	   	
				<div class="col-lg-3 col-lg-offset-1  ">
					
						<div class="nd-bg-white margin-bottom    nd-overflow-hidden">
						
							<img src="/public/image/exame.jpg" class="nd-overflow-hidden" style="height: 200px;" >

							<div class=" nd-bg-pink ">
								<p class="nd-cl-white nd-bg-pink  nd-padding-sm nd-bold"> 
									<span class="nd-right"> Exame  
									</span>
									<br> 
								</p>
								
							</div>

							<div class="nd-padding-sm">

								<center>
								
								<p style="padding:40px; border-radius:100px 100px;" class="value-title nd-cl-blue nd-uppercase nd-border nd-border-cl-pink "> Admissão</p>

								</center>
							

								<center>


									
									
										<p  class="nd-btn-md nd-cl-pink nd-border nd-border-cl-blue nd-bg-white nd-bold">Brevemente</p>

									
								
								

								</center>

							</div>


							

							
						</div>


							
				
			</div>


	   	
				<div class="col-lg-3 col-lg-offset-1 ">
					
						<div class="nd-bg-white margin-bottom    nd-overflow-hidden">
						
							<img src="/public/image/exame.jpg" class="nd-overflow-hidden" style="height: 200px;" >

							<div class=" nd-bg-pink ">
								<p class="nd-cl-white nd-bg-pink  nd-padding-sm nd-bold"> 
									<span class="nd-right"> Exame  
									</span>
									<br> 
								</p>
								
							</div>

							<div class="nd-padding-sm">

								<center>
								
								<p style="padding:40px; border-radius:100px 100px;" class="value-title nd-cl-blue nd-uppercase nd-border nd-border-cl-pink "> 12ª classe</p>

								</center>
							

								<center>


									
									
										<p  class="nd-btn-md nd-cl-pink nd-border nd-border-cl-blue nd-bg-white nd-bold">Brevemente</p>

									
								
								

								</center>

							</div>


							

							
						</div>


							
				
			</div>


	   	
				<div class="col-lg-3 col-lg-offset-1 ">
					
						<div class="nd-bg-white margin-bottom    nd-overflow-hidden">
						
							<img src="/public/image/exame.jpg" class="nd-overflow-hidden" style="height: 200px;" >

							<div class=" nd-bg-pink ">
								<p class="nd-cl-white nd-bg-pink  nd-padding-sm nd-bold"> 
									<span class="nd-right"> Exame  
									</span>
									<br> 
								</p>
								
							</div>

							<div class="nd-padding-sm">

								<center>
								
								<p style="padding:40px; border-radius:100px 100px;" class="value-title nd-cl-blue nd-uppercase nd-border nd-border-cl-pink "> 10ª classe</p>

								</center>
							

								<center>


									
									
										<p  class="nd-btn-md nd-cl-pink nd-border nd-border-cl-blue nd-bg-white nd-bold">Brevemente</p>

									
								
								

								</center>

							</div>


							

							
						</div>


							
				
			</div>



	

</div>



	<center><a href="/exames" class="btn nd-btn-md nd-bg-blue  nd-cl-white">Ver Todas Exames</a> </center> 

		<br><br>
@endsection

@section('testemunho')
   <div class="row">

		<div class="col-lg-4">
		<center>
			<img src="/public/image/ornelio.png" class="img-circle" style="width:124px; height:124px; ">
		</center>
			<blockquote>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			  <footer>Ornélio Chaúque</footer>
			</blockquote>
		</div>

		<div class="col-lg-4">
			<center>
			<img src="/public/image/ornelio.png" class="img-circle" style="width:124px; height:124px; ">
		</center>
			<blockquote>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			  <footer>Ornélio Chaúque</footer>
			</blockquote>
		</div>

		<div class="col-lg-4">
		

			<center>
			<img src="/public/image/ornelio.png" class="img-circle" style="width:124px; height:124px; ">
		</center>
			<blockquote>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			  <footer>Ornélio Chaúque</footer>
			</blockquote>
		</div>

	
		

	</div>
@endsection




