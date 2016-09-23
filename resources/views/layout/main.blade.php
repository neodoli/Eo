<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/public/style/framework.css">
		<link rel="stylesheet" type="text/css" href="/public/style/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
	</head>
	<body>

		<!--div header data-->
		<div class="nd-bg-pink nd-cl-white">
			<div class="container nd-cl-white">
				@yield('header')
			</div>
		</div>


		<!--div nav menu data-->
		<div class="nd-bg-white container-padding">
			
			<nav class="navbar navbar-default nd-bg-white nd-no-margin  nd-no-border" >
				<div class="container-fluid">

				<!-- logo e butao para mobile -->
					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				        </button>
				        <a class="navbar-brand" href="/" style="margin-bottom:10px;"><img src="/public/image/logo.png"></a>	
					</div>

				<!-- navbar item-->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a href="/courses" class="nav-item  nd-cl-blue nav-font">  Explicações </a>
								
							</li>

							

							<li>
								<a href="/exames" class="nav-item nd-cl-gray nav-font">  Exames </a>
								
							</li>
							<li >
								<a href="/testes" class="nav-item nd-cl-gray nav-font"> Teste Provinciais</a>
								
							</li>
							

							<li >
								<a href="/teachersOut" class="nav-item nd-cl-gray nav-font"> Torne-se num Explicador</a>
								
							</li>
							
							
						</ul>

						@if(Auth::check())

						<ul class="nav navbar-nav navbar-right">

							<li>
								<img src="/public/uploads/user/{{Auth::user()->image}}"  style="padding:7px 7px;"> 
								
							</li>


							

							<li style="padding:7px 7px;" >

								<div class="dropdown">
									  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									   Olá,    {{Auth::user()->username}}
									    <span class="caret"></span>
									  </button>

									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									    <li><a href="/dashboard">Suas Inscrições</a></li>
									    <li><a href="/profile">Perfil</a></li>
									    <li><a href="/logout">Sair</a></li>
									    
									  </ul>
								</div>

								
							</li>
							

						</ul>



						@else

						<ul class="nav navbar-nav navbar-right">

							<li>
								<a href="/login" class="nav-font nd-btn-md nd-cl-blue nd-border nd-border-cl-blue hover-blue" style="padding:7px 15px;"> Entrar  </a>
								
							</li>
							<li style="margin-left: 10px;">
								<a href="/signup" class=" nav-font nd-btn-md nd-border nd-cl-white nd-bg-blue nd-border-cl-blue hover-blue" style="padding:7px 25px;" >   Registro</a>
								
							</li>
							

						</ul>

						@endif

						
						

					</div>

					
					

				</div>
			</nav>
		</div>

		<!--div banner data -->
		<div id="banner">
			<div class="container">
				@yield('banner')
			</div>
		</div>

		<!-- patner-->
		<div  class="nd-bg-white">
			<div class="container-fluid">

			<center>

				<ul>
					<li class="nd-list-inline"> <img src="/public/image/uz.png"></li>
					
					<li class="nd-list-inline"> <img src="/public/image/isced.jpg"></li>
			
					<li class="nd-list-inline"> <img src="/public/image/ucm.jpg"></li>
				
					<li class="nd-list-inline"> <img src="/public/image/up.jpeg"></li>
					
					<li class="nd-list-inline"> <img src="/public/image/mct.png"></li>
					
				</ul>
			</center>
				
			</div>
		</div>

		<!-- values data -->
		<div class="nd-bg-white">
			<div class="container">

				<div class="row">
				<br> <br>

					<div class="col-lg-4">

						<p class="value-title text-center nd-cl-blue">Desponibilidade</p>
						
						<p class="text-center"> Lawrence Edward Page, mais conhecido como Larry,http://www.larrypage.news, é o atual CEO da Alphabet Inc. Após a consolidação do Google como empresa, Larry Page foi nomeado, o primeiro diretor executivo. Wikipédia </p>
					</div>

					<div class="col-lg-4">
						

						<p class="value-title text-center nd-cl-blue">Acessibilidade</p>
						
						<p class="text-center"> Lawrence Edward Page, mais conhecido como Larry,http://www.larrypage.news, é o atual CEO da Alphabet Inc. Após a consolidação do Google como empresa, Larry Page foi nomeado, o primeiro diretor executivo. Wikipédia </p>
						
						
					</div>
					<div class="col-lg-4">
						<p class="value-title text-center nd-cl-blue">Auxilio no aprendizado</p>
						
						<p class="text-center"> Lawrence Edward Page, mais conhecido como Larry,http://www.larrypage.news, é o atual CEO da Alphabet Inc. Após a consolidação do Google como empresa, Larry Page foi nomeado, o primeiro diretor executivo. Wikipédia </p>

					</div>
					

				</div>

				
				
			</div>
		</div>

		<!-- div content data -->
		<div class="container-padding">
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>

		<!-- div testemunho data -->

		<div class="nd-bg-white container-padding">
			<div class="container-fluid">
				@yield('testemunho')
			</div>
		</div>

		<br>

		<!-- div footer values -->
		<div class="nd-bg-white container-padding">
			<div class="container-fluid">


				
				<div class="row">
					
					<div class="col-lg-2 ">
						
						<img src="/public/image/logofooter.png">
						
					</div>

					<div class="col-lg-7 ">

						<div class="row">

							<ul style="margin-left:-40px;">

								<li class="nd-cl-blue nd-list-inline"> <a href="/about">sobre</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="/contact">contactos</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="/faq">FAQs</a> </li>

							</ul>

							<ul  style="margin-left:-40px;">

								<li class="nd-cl-blue nd-list-inline"> <a href="/terms">Termos de servico</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="/terms">politica de privacidade</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="/terms">politica de acessibilidade</a> </li>

							</ul>
							
						
						</div>

						<div class="row">
							
						ExplicadorOnline  © 2016 todos direitos reservados.  um produto da <a href=""> <span class=" nd-cl-pink"> Neodoli.Inc.</span> </a> 
						</div>
						
					
					</div>

					<div class="col-lg-3 ">
						<div class="row">
							<ul style="margin-left:-40px;">

								<li class="nd-list-inline"> <a href=""> <i class="fa fa-facebook-official fa-3x nd-cl-blue"></i> </a> </li>
								<li class="nd-list-inline"> <a href=""><i class="fa fa-twitter-square fa-3x nd-cl-blue"></i> </a></li>
								<li class="nd-list-inline"> <a href=""><i class="fa fa-youtube-square fa-3x nd-cl-blue"></i> </a></li>
								<li class="nd-list-inline"> <a href=""><i class="fa fa-google-plus-square fa-3x nd-cl-blue"></i> </a></li>
								

							</ul>
						</div>

						<div class="row">
							<ul style="margin-left:-40px;">

								<li class="nd-list-inline"><img src="/public/image/google-play-store.png"></li>
								<li class="nd-list-inline"> <img src="/public/image/app_store.png"></li>
								

							</ul>

						</div>

					</div>

				</div>

			</div>
		</div>

		<script sync src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script sync type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>