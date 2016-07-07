<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/public/style/framework.css">
		<link rel="stylesheet" type="text/css" href="/public/style/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script sync src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script sync type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>

		<!--div header data-->
		<div class="nd-bg-pink nd-cl-white">
			<div class="container nd-cl-white">
				@yield('header')
			</div>
		</div>


		<!--div nav menu data-->
		<div class="nd-bg-black container-padding">
			
			<nav class="navbar navbar-default nd-bg-black nd-no-margin  nd-no-border" >
				<div class="container-fluid">

				<!-- logo e butao para mobile -->
					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				        </button>
				        <a class="navbar-brand" href="www.esplicadoronline.com"></a>	
					</div>

				<!-- navbar item-->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a href="/class" class="nav-item nd-cl-white">  Aulas </a>
								
							</li>

							<li>
								<a href="/teacher" class="nav-item nd-cl-white">  Torne-se em um explicador </a>
								
							</li>
							<li >
								<a href="/pricing" class="nav-item nd-cl-white ">  Planos de pagamentos </a>
								
							</li>
							<li>
								<a href="/about" class="nav-item nd-cl-white">  Sobre </a>
								
							</li>
							
						</ul>

						<ul class="nav navbar-nav navbar-right">

							<li>
								<a href="#" class="nav-item nd-cl-pink nd-cl-white"> Entrar  </a>
								
							</li>
							<li class="nd-bg-blue nd-cl-white ">
								<a href="#" class="nd-cl-white" >   Registro</a>
								
							</li>
							

						</ul>
						

					</div>

					
					

				</div>
			</nav>
		</div>

		<!--div banner data -->
		

	

		<!-- div content data -->
		<div class="container-padding">
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>

		
	
		<!-- div footer values -->
		<div class="nd-bg-white container-padding">
			<div class="container-fluid">


				
				<div class="row">
					
					<div class="col-lg-2 ">
						
						<img src="../../../laravel/public/image/logo.png">
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

	</body>
</html>