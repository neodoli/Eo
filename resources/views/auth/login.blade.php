@extends('../layout/auth')


@section("title", "Iniciar Sessão")

@section("content")

<br><br>

<div class="row ">

	
	<div class="nd-padding-lg">
	
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 nd-bg-white nd-padding-lg ">

		<center> <img src="/public/image/logo.png" class="nd-center"> </center>

		<br><br>

			<span style="color:red;">
			{{$errors->first('email')}}, {{$errors->first('password')}}
			</span>

			<br>
		 
			<form method="POST" action="/login">
					
					
					<input type="hidden" name="_token" value="{{csrf_token()}}">


					
					  <div class="form-group">
					    
					    <input type="email" class="form-control input-lg" id="InputEmail1" name="email" placeholder="Email">
					  </div>

					  <div class="form-group">
					   
					    <input type="password" name="password" class="form-control input-lg" id="InputPassword" placeholder="Password">
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