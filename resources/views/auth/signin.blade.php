@extends('../layout/auth')

@section("title", "Casdastro")

@section("content")

<div class="row ">

	<div class="col-lg-3 col-md-3">  ... </div>

	<div class="nd-padding-lg">
	
		<div class="col-lg-4 col-md-4 nd-bg-white nd-padding-lg ">

		<center> <img src="/public/image/logo.png" class="nd-center"> </center>

		<br><br>

		
			<form>
					 
					  <div class="form-group">
						  
						    <input type="text" class="form-control input-lg" id="InputName" placeholder="Nome Completo">
					  </div>

					
					  <div class="form-group">
					    
					    <input type="email" class="form-control input-lg" id="InputEmail1" placeholder="Email">
					  </div>

					  <div class="form-group">
					   
					    <input type="password" class="form-control input-lg" id="InputPassword" placeholder="Password">
					  </div>

					   <div class="form-group">
					  
					    <input type="password" class="form-control input-lg" id="InputPassword1" placeholder="Digite Novamente a Senha">
					  </div>
					  <button type="submit" class="btn nd-bg-pink nd-cl-white btn-lg btn-block">Cadastrar</button>

					  <br>

					  <div class="row ">
					  	
					  	<div class="col-lg-6 col-md-6">

					  		  <button type="submit" class="btn nd-bg-white nd-cl-blue btn-lg btn-block nd-border nd-border-cl">  <img src="/public/image/facebook-login.png"> Facebook</button>
					  		
					  	</div>

					  	<div class="col-lg-6 col-md-6">

					  		  <button type="submit" class="btn nd-bg-white nd-cl-pink btn-lg btn-block nd-border nd-border nd-border-cl"> <img src="/public/image/google-login.png"> Google</button>
					  		
					  	</div>
					  	

					  </div>

			</form>
					

		</div>

	</div>
	<div class="col-lg-4 col-md-4"> . </div>

	<br><br>
</div>


@endsection