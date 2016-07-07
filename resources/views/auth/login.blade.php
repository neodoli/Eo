@extends('../layout/auth')


@section("title", "Iniciar Sessão")

@section("content")

<br><br>

<div class="row ">

	<div class="col-lg-4 col-md-4">.</div>

	<div class="nd-padding-lg">
	
		<div class="col-lg-4 col-md-4 nd-bg-white nd-padding-lg ">

		<center> <img src="/public/image/logo.png" class="nd-center"> </center>

		<br><br>

		
			<form>
					
					
					  <div class="form-group">
					    
					    <input type="email" class="form-control input-lg" id="InputEmail1" placeholder="Email">
					  </div>

					  <div class="form-group">
					   
					    <input type="password" class="form-control input-lg" id="InputPassword" placeholder="Password">
					  </div>

					   
					  <button type="submit" class="btn nd-bg-pink nd-cl-white btn-lg btn-block">Entrar</button>

					  <br>

					  <div class="row ">
					  	
					  	<div class="col-lg-6 col-md-6">

					  		  <a href="/forget_password" class="btn nd-bg-white nd-cl-blue btn-lg btn-block  nd-text-small">   Esqueci minha senha</a>
					  		
					  	</div>

					  	<div class="col-lg-6 col-md-6">

					  		  <a href="/signin"  class="btn nd-bg-white nd-cl-pink btn-lg btn-block  nd-text-small" > criar uma conta</a>
					  		
					  	</div>
					  	

					  </div>

			</form>
					

		</div>



	</div>


	<div class="col-lg-4 col-md-4"> .</div>


	



</div>
<br><br><br><br>

@endsection