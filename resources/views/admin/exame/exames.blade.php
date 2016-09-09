@extends('layout/admin')

@section('title', 'Exames')

@section('content')

	<div class="row">

			<div class="col-lg-12  col-md-12">

											
										 
										
				<table class="table table-striped">

					<a href="/admin/exame/add" class="btn btn-primary" >Adicionar Exame</a>
					<a href="/admin/exame/categorie/add" class="btn btn-primary" style="margin-left:5px;">Adicionar Categoria</a>
					<br><br><br>
					<tr>
     					<th>Disciplina</th><th>tipo</th><th>ano</th><th>Açôes</th>
					</tr>

					@foreach($exames as $exame)

					<tr>
							<td class="nd-text-small">{{$exame->subject->name}}</td>
							<td class="nd-text-small">{{$exame->categorie->name}}</td>
							<td class="nd-text-small">{{$exame->year}}</td>
							<td class="nd-text-small">

							<a style="margin-left:5px;" href="/admin/exame/{{$exame->id}}" class="btn nd-right btn-primary">Gerir</a>
							<a style="margin-left:5px;" href="/admin/exame/{{$exame->id}}/edit" class=" nd-right btn btn-primary">Editar</a>

							</td>

					</tr>
					@endforeach
					

				</table>
		
			</div>

		</div>

@stop
