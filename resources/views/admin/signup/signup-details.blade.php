@extends('layout/admin')

@section('title', 'Inscrições')

@section('content')

	

	
	<p>Dia do pagamento:<span class="nd-bold"> {{$signup->payment->date}} </span> </p>
	<p>Data da Inscrição: <span class="nd-bold"> {{$signup->start_at}} </span> </p>
	<p>Final da Inscrição: <span class="nd-bold"> {{$signup->end_at}} </span> </p>

	<br><br>
	@if(Session::has('error'))
	<p style="color:red;"> {{Session::get('error')}}</p>

	@endif
	<form action="/admin/course/signup/3/8/confirm" method="post">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			
			<label for="numberDoc">Número do Documento</label>

			<input type="number" name="numberDoc" class="form-control" required="true" placeholder="introduza o numero do documento para sua verificação">

		</div>

		<div class="form-group">

					<label for="mounthNumber">quantos Meses?</label>

					<input type="number" name="mounthNumber" class="form-control" required="true" placeholder="introduza o numero de mês">
					

		</div>

		<input type="submit" value="Confirmar Inscrição" class="btn btn-success" >
		<a href="/admin/course/signup/3/8/problem" class="btn btn-danger">Não confirmar</a>

		

	</form>
	<br><br>

	<div>
		<img src="/public/uploads/payment/{{$signup->payment->file}}">
	</div>

@stop