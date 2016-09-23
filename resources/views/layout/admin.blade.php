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
								<a href="/admin" class="nav-item  nd-cl-blue nav-font">  Administração </a>
								
							</li>

							<!--

							<li>
								<a href="/exames" class="nav-item nd-cl-gray nav-font">  Exames </a>
								
							</li>
							<li >
								<a href="/testes" class="nav-item nd-cl-gray nav-font"> Teste Provinciais</a>
								
							</li>
							

						
								<a href="/teachersOut" class="nav-item nd-cl-gray nav-font"> Torne-se num Explicador</a>
								
							</li>
							-->
							
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
		

	

		<!-- div content data -->
		<div class="container-padding">
			<div class="container-fluid">

				<div class="row">

						<div class="col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">

							<div class="panel panel-default">

									<div class="panel-heading">Administração</div>

										<div class="panel-body">

											<ul>
												<a href="/admin"><li class="nd-list">Resumo</li></a>
												<a href="/admin/users"><li class="nd-list">Usuarios</li></a>
												<a href="/admin/teachers/in"><li class="nd-list">Esplicadores Internos</li></a>
												<a href="/admin/teachers/out"><li class="nd-list">Esplicadores Pré-Inscritos</li></a>
												<a href="/admin/courses"><li class="nd-list">Cursos</li></a>
												<a href="/admin/exames"><li class="nd-list">Exames</li></a>
												<a href="/admin/subjects"><li class="nd-list">Disciplinas</li></a>
												<a href="/admin/courses/signup"><li class="nd-list">Inscrições</li></a>

												<a href="/admin/cupom"><li class="nd-list">Cupão</li></a>

											</ul>
												

										</div>
			
									</div>

									<div class="panel panel-default">
										
										<div class="panel-heading">Definições de contas</div>

											<div class="panel-body">

												<ul>
													<a href="/admin/users/1/update"><li class="nd-list">Actualizar Seus Dados</li></a>

													<a href="/admin/add"><li class="nd-list">Adicionar Administrador</a>
											
											

												</ul>

										
											

											</div>
										
										</div>
									

									</div>
	
								<div class="col-md-8 col-lg-8  ">

									
											@yield('content')
									
									
								</div>
								
								
								

							</div>
											












				
			</div>
		</div>

		
	
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