@extends('layout/admin')

@section('title', 'Disciplinas')

@section('content')

	<div class="row">

		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

			<p> 
				<a href="" class="btn btn-primary">Adicionar Disciplina</a>
			</p>

			<table class="table table-striped">

				<tr><th>Nome</th> <th> Acções</th></tr>
				<tr>
					<td>{$subject->name}</td>
					<td>
						<a href="" class="btn btn-primary">Adicionar Classe</a>
						<a href="" class="btn btn-primary">Editar</a>
					</td>
				</tr>


					

				
			</table>
			

		</div>
		

	</div>



@stop