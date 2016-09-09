@extends('layout/main2')

@section('title', 'Inscrever')

@section('content')
 
	<div class="row nd-bg-white">

		<br>	<br>	<br>

		<div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 col-sm-12 col-xs-12">

			<form method="post" action="/courses/{{$id}}/signup" enctype="multipart/form-data">

				<input type="hidden" name="_token" value="{{csrf_token()}}">

				@if(Session::has('error'))

				<p style="color:red">{{session('error')}}</p>


				@endif

				<div class="form-group">

					<label for="mounthNumber">Increver-se para quantos Meses?</label>

					<input type="number" name="mounthNumber" class="form-control" required="true">
					

				</div>
				

				<div class="form-group">

					<label for="numberDoc">Numero do Recibo ou talão de deposito</label>

					<input type="number" name="numberDoc" class="form-control" required="true">
					

				</div>

				<div class="form-group">

					<label for="file">Enexar o documento ou imagem do Recibo</label>

					<input type="file" name="data" class="form-control" required="true">
					

				</div>

				<div class="form-group">
				

					<input type="submit" value="Inscrever"  class="btn btn-primary">
					

				</div>
				


				
				


			</form>
			
		</div>
		

	</div>

	<br>	<br>	<br>

@stop