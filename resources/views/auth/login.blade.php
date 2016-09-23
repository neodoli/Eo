@extends('../layout/auth')


@section("title", "Iniciar Sessão")

@section("content")

<br><br>

<div class="row ">

	
	<div class="nd-padding-lg">
	
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 nd-bg-white nd-padding-lg ">

		<center> <img src="/public/image/logofooter.png" class="nd-center"> </center>

		<br><br>

		@if(Session::has('info'))

			<p class="nd-cl-blue">{{Session::get('info')}}</p>

		@endif

		@if($errors->has('email') || $errors->has('password') )

			<span style="color:red;">
			{{$errors->first('email')}}, {{$errors->first('password')}}
			</span>


		@endif

			

			@if(session('error'))

				<p style="color:red;">{{session('error')}}</p>

			@endif
			<br>
		 
			<form method="POST" action="/login">
					
					
					<input type="hidden" name="_token" value="{{csrf_token()}}">


					
					  <div class="form-group">
					    
					    <input type="email" value="{{old('email')}}" class="form-control input-lg" id="InputEmail1" name="email" placeholder="Email" required="true">
					  </div>

					  <div class="form-group">
					   
					    <input type="password" required="true"  name="password" class="form-control input-lg" id="InputPassword" placeholder="Password">
					  </div>

					  <div class="form-group">

					  	<input type="checkbox" name="remember" value="yes"> Manter a sessão iniciada
					  	
					  </div>

					   
					  <button type="submit" class="btn nd-bg-pink nd-cl-white btn-lg btn-block">Entrar</button>

					  <br>

					  <div class="row ">
					  	
					  	<div class="col-lg-6 col-md-6">

					  		  <a href="/forget_password" class="btn nd-bg-white nd-cl-blue btn-lg btn-block  nd-text-small">   Esqueci minha senha</a>
					  		
					  	</div>

					  	<div class="col-lg-6 col-md-6">

					  		  <a href="/signin"  class="btn nd-bg-blue nd-cl-white btn-lg btn-block  nd-text-small" > Criar uma conta</a>
					  		
					  	</div>
					  	

					  </div>

			</form>
					

		</div>



	</div>


	<div class="col-lg-4 col-md-4"> .</div>


	



</div>
<br><br><br><br>

@endsection