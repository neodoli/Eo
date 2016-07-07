@extends('layout/main2')

@section("title", "Cursos")

@section("content")

	<div class="row nd-bg-white container-padding">

		<div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nd-overflow-hidden" >

			<img src="/public/image/math.jpg">
			

		</div>

		<div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >

			<p class="big-title"> Course Name</p>
			<p class="nd-text-medium"> his is CS50x, Harvard University's introduction to the intellectual enterprises of computer science and the art of programming for majors and non-majors alike, with or without prior programming experience. An entry-level course taught by David J. Malan, CS50x teaches students how to think algorithmically and solve problems efficiently. Topics include abstraction, algorithms, data structures, </p>
			
			
		</div>

		<div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nd-center" >
				<br><br><br>

			<p class="value-title"> Acesse e Assista as Aulas</p>

			<br>

			<a href="#" class="nd-btn-lg nd-bg-pink nd-cl-white">Inscreva-se</a>
			<br> <br>

			<span class="nd-text-small">Increva-se e tenha acesso a todo material desponivel para ti.</span>
			
			
		</div>

		
	</div>

	<br> <br><br>

	<div class="row ">

		<div  class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-padding" >

			<table class=" table  table-striped">
				<thead>
					<tr> <th>#</th> <th>Lição</th> <th>Tempo</th> </tr>
				</thead>

				<tbody>
					<tr>
						<td>a</td>
						<td>his is CS50x, Harvard University's introduction</td>
						<td>c</td>
					</tr>

					<tr>
						<td>a</td>
						<td>his is CS50x, Harvard University's introduction</td>
						<td>c</td>
					</tr>

					<tr>
						<td>a</td>
						<td>his is CS50x, Harvard University's introduction</td>
						<td>c</td>
					</tr>

					<tr>
						<td>a</td>
						<td>his is CS50x, Harvard University's introduction</td>
						<td>c</td>
					</tr>
				
				</tbody>


			</table>

				<br><br>

				<center> <a href="#" class="nd-btn-lg nd-bg-pink nd-cl-white nd-center">Inscreva-se</a> </center>
			

		</div>

		<div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nd-bg-white container-padding">

			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nd-center">

					<img src="/public/image/ornelio.png" class="img-circle">

					<p class="value-title">Ornelio</p>
					<p>Engº informatico</p>
					

				</div>
				

			</div>

			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nd-center">

					<img src="/public/image/ornelio.png" class="img-circle">

					<p class="value-title">Ornelio</p>
					<p>Engº informatico</p>
					

				</div>
				

			</div>

			<br> <br>

			<center><a href="#" class="nd-btn-lg nd-bg-blue nd-cl-white nd-center">Torne-se num explicador</a> </center>
			
			
		</div>

		

	</div>



@endsection