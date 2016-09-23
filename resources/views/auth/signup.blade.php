@extends('../layout/auth')

@section("title", "Casdastro")

@section("content")

<div class="row ">

	

	<div class="nd-padding-lg">
	
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 nd-bg-white nd-padding-lg ">

		<center> <img src="/public/image/logofooter.png" class="nd-center"> </center>

		<br><br>

			
				@if($errors->has('email') || $errors->has('name') || $errors->has('passwprd') || $errors->has('nickName') || $errors->has('contact'))

					<span style="color:red">
							verifique se introduziu correctamente  todos campos.
					</span>

				@endif

				@if(Session::has('error'))

				<p style="color:red;"> {{Session::get('error')}}</p>
				
				@endif
		

		
			<form method="post" action="/signup" >
					 

						<input type="hidden" name="_token" value="{{csrf_token()}}">

					  <div class="form-group">
						  
						    <input type="text" name="name" class="form-control input-lg" id="InputName" placeholder="Digite seu Nome Completo" value="{{old('name')}}" required="true">
					  </div>

					  <div class="form-group">
					  
					    <input type="text" name="nickName" class="form-control input-lg" id="InputPassword1" placeholder="Digite o nome do usuário" value="{{old('nickName')}}" required="true">
					  </div>

					
					  <div class="form-group">
					    
					    <input type="email" name="email" class="form-control input-lg" id="InputEmail1" placeholder="Email" value="{{old('email')}}" required="true" >
					  </div>

					  <div class="form-group">

					    <input type="text" name="contact" class="form-control input-lg" id="contact" placeholder="Contacto" value="{{old('contact')}}" required="true">
					  </div>

					  <div class="form-group">
					   
					    <input type="password" name="password" class="form-control input-lg" id="InputPassword" placeholder="sua senha" required="true">
					  </div>

					   
					  <button type="submit" class="btn nd-bg-pink nd-cl-white btn-lg btn-block">Cadastrar</button>

					  <br>

					  <div class="row ">
					  	
					  	<div class="col-lg-6 col-md-6">

					  		  <button title="Brevemente" type="submit" class="btn nd-bg-white nd-cl-blue btn-lg btn-block nd-border nd-border-cl" disabled="true">  <img src="/public/image/facebook-login.png" > Facebook</button>
					  		
					  	</div>

					  	<div class="col-lg-6 col-md-6" >

					  		  <button title="Brevemente" type="submit" class="btn nd-bg-white nd-cl-pink btn-lg btn-block nd-border nd-border nd-border-cl" disabled="true"> <img src="/public/image/google-login.png"> Google</button>
					  		
					  	</div>
					  	

					  </div>

			</form>
					

		</div>

	</div>
	<div class="col-lg-4 col-md-4"> . </div>

	<br><br>
</div>


@endsection