@extends('layout/main3')

@section("title", "Cursos")

@section("content")

	<div class="row">

		

		<div class="col-lg-10 container-padding ">
		
				<div class=" row">

		@if($courses->isEmpty())

			<p class="nd-cl-black big-title">Nenhum Curso encontrado nesta categoria</p>

			<a href="/courses" class="btn nd-btn-medium nd-cl-white nd-bg-blue">Ir para Cursos</a>

		@endif

				

		@foreach($courses as $course)


			<div class="col-lg-4 ">
					
						<div class="nd-bg-white margin-bottom    nd-overflow-hidden">
						
							<img src="/public/uploads/course/{{$course->image}}" class="nd-overflow-hidden" style="height: 200px; width:100%;" >

							<div class=" nd-bg-pink ">
								<p class="nd-cl-white nd-bg-blue  nd-padding-sm nd-bold"> 
									<span class="nd-right"> {{$course->courseCategorie->name}}, {{$course->price}} Mtn / mês
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
		
		</div>

		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 container-padding ">

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">

				<p class="value-title">Filtrar pesquisa</p>
				
					
						<ul class="nd-bg-white   ul-categorie">

							<center> <p class=" nd-bold ">Disciplinas</p></center>
							<hr>

							@foreach($subjects as $subject)

							<li class="list-categorie "><a href="/courses/disciplinas/{{$subject->name}}" >{{$subject->name }} </li></a> 

							@endforeach
							
							
							
							

						</ul>
						<br>

							<ul class="nd-bg-white   ul-categorie">
							<center> <p class=" nd-bold ">Nivel</p></center>
							<hr>

							@foreach($categories as $categorie)
							<li class="list-categorie "><a href="/courses/nivel/{{$categorie->name}}" >{{$categorie->name}} </li></a> 

							@endforeach

							
							
							
							

						</ul>
							
				
					
					
				</div>

			</div>	
		
		</div>

	</div>


@endsection