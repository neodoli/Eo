@extends('layout/main3')

@section("title", "Cursos")

@section("content")

	<div class="row nd-bg-white container-padding">

	

		<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

			<p class="big-title nd-cl-pink"> {{$course->name}} </p>

			<p  class="nd-cl-blue"><span style="margin-right:20px;" >{{$course->subject->name}}</span>  <span>{{$course->courseCategorie->name}}</span></p>

			<p class="nd-text-medium"> {{$course->description}} 
			</p>

			
			
		</div>
	</div>



	<div class="row nd-bg-white container-padding">

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
			

			<iframe style="width:100%; height: 400px;" src="{{$course->courseVideos->first()->url}}" frameborder="0" allowfullscreen></iframe>
				
			</iframe>
			
		</div>


		<div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " >
				
			<span class="nd-text-normal value-title nd-cl-blue">Increva-se e tenha acesso a todo material desponivel para ti.</span>

			<br>
			<br>
			<p class=""><span class="value-title ">{{$course->courseCategorie->price}}</span></p>
			<p  class="nd-cl-gray"> <span style="margin-right:10px;" class="value-title " >{{$course->courseVideos->count()}}</span>Aulas</p>

			

			
		
		
			<br>

			<a href="/courses/{{$course->name}}/signup" class="nd-btn-lg nd-bg-blue nd-cl-white">Inscreva-se</a>
			<br> <br>

			<span class="nd-text-small">Increva-se e tenha acesso a todo material desponivel para ti.</span>

			<br>
			<br>

			


			
			
		</div>
		

	</div>

		

		
	</div>

	<br>

	<div class=" container">

		<div class="row ">

		<div  class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-padding" >

			<table class=" table  table-striped">
				<thead>
					<tr> <th>#</th> <th>Lição</th> <th>Tempo</th> </tr>
				</thead>

				<tbody>

				@foreach($course->courseVideos as $video)
					<tr>
						<td>{{$listNumber++}}</td>
						<td>{{$video->name}}</td>
						<td>{{$video->name}}</td>
					</tr>

				@endforeach
				</tbody>


			</table>

				<br><br>

				<center> <a href="/courses/{{$course->name}}/signup" class="nd-btn-lg nd-bg-pink nd-cl-white nd-center">Inscreva-se</a> </center>
			

		</div>

		<div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12 container-padding">

			

			

			
			
			
		</div>

		

	</div>

		
	</div>
	

	


@endsection