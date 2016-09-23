@extends('layout/admin')

@section('title', 'Courses')

@section('content')

	<div class="row">

			<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">

					
										 
										
				<table class="table table-striped">

					<form action="/admin/cupom" method="post">

						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group">

							<label for="days">validade do cupão</label>
							<input type="number" class="form-control" name="days" placeholder="Número de dias" required="true">
							
						</div>

						<input type="submit" value="Gerar cupão" class="btn btn-primary">
						

					</form>

					
					<br><br><br>
					<tr>
     					<th>Código</th><th>Data Início</th><th>Número de dias</th>
					</tr>

					@foreach($cupoms as $cupom)

					<tr>
							<td class="nd-text-small">{{$cupom->codigo}}</td>
							<td class="nd-text-small">{{$cupom->start_at}}</td>
							<td class="nd-text-small">{{$cupom->days}}</td>


					</tr>
					@endforeach
					

				</table>
		
			</div>

		</div>

@stop
