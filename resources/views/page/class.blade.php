@extends('layout/main3')

@section("title", "Cursos")

@section("content")

	<div class="row">

		

		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
				
				<p class="value-title "># {{$course->name}}</p>

				<iframe style="width:100%; height:400px;" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  ">

			<p class="value-title nd-text-center nd-cl-gray">Baixar Materias de apoio</p>
					
				<ul>

					@foreach($materials as $material)

						<li class="nd-bg-white  nd-cl-gray nd-radius nd-list nd-border nd-border-cl-gray " style="margin-bottom:5px; padding:5px;"> <a href="/public/uploads/course/material/{{$material->url}}"> 
					<img src="/public/image/doc.png"> {{$material->name}} </a></li>

					@endforeach
					
					

				</ul>
							
				
					
		</div>

	</div>

	<br> <br><br>

<div class="row">

		

		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
		
				<p class="value-title nd-cl-gray">Aulas </p>
						
						
							<table class="table table-hover">

							<tr>
								<th>#</th>
								<th> Nome</th>
								<th>Duração</th>

							</tr>

							@foreach($course->courseVideos as $video)

							
							<tr  onclick="window.document.location='/classroom/{{$course->name}}/{{$video->name}}'">
								<a href="#"><td>{{++$listNumber}}</td></a>
								<td> {{$video->name}}</td>
								<td>{{$video->duraction}}</td>

							</tr>
							

							@endforeach

							
							
							</table>

						
				
		</div>

		




	

@endsection