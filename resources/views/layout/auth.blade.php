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
	<body style="background-color:#fff;">

	

		<!-- div content data -->
		<div class="container-padding">
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>

		
	<hr>
		<!-- div footer values -->
		<div class="nd-bg-white container-padding">
			<div class="container-fluid">


				
				<div class="row">
					
					<div class="col-lg-2 ">
						
						<img src="/public/image/logo.png">
					</div>

					<div class="col-lg-7 ">

						<div class="row">

							<ul style="margin-left:-40px;">

								<li class="nd-cl-blue nd-list-inline"> <a href="">sobre</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="">contactos</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="">FAQs</a> </li>

							</ul>

							<ul  style="margin-left:-40px;">

								<li class="nd-cl-blue nd-list-inline"> <a href="">Termos de servico</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="">politica de privacidade</a> </li>
								<li class="nd-cl-blue nd-list-inline"> <a href="">politica de acessibilidade</a> </li>

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