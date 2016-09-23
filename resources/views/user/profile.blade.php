@extends('layout/main3')

@section('title', 'Perfil')

@section('content')

	<p class="value-title nd-cl-blue">Dados do Pérfil</p>
	<div class="row">

		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >

			<form action="/profile/update" method="post">
				
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">

					<label for="name">Nome Completo</label>
					<input type="text" name="fullname" class="form-control" value="{{$user->name}}">
					

				</div>

				<div class="form-group">

					<label for="username">Nome do usuário</label>
					<input type="text" name="username" class="form-control" value="{{$user->username}}">
					
				</div>

				<div class="form-group">

					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" value="{{$user->email}}">
					
				</div>

				<div class="form-group">

					<label for="contact">Contacto</label>
					<input type="text" name="contact" class="form-control" value="{{$user->contact}}">
					
				</div>

				<input type="submit" Value="Actualizar dados" class="btn btn-success">

			</form>			

		</div>


		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
			
		<center>	
			<div>
				
					<img src="/public/uploads/user/{{$user->image}}" class="img-circle" style="width:120px; height:120px; ">

					<br><br>
				    <a href="#" class="btn btn-primary">Alterar a Foto</a>
				
			</div>
			

			<div> 

			<br><br>

				@if(Session::has('cupomerror'))

					<p style="color:red;">{{Session::get('cupomerror')}}</p>

				@endif
				<form action="/profile/cupom" method="post">

					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						
						<input type="text" name="cumpom" class="form-control" placeholder="Insira o código do cupão" required="true">

					</div>
					
					<input type="submit" value="Adicionar cupão" class="btn btn-primary ">
					
				</form>
				


				
			</div>

			</center>
			

		</div>
		


	</div>

@stop