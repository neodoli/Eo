@extends("layout/main3")

@section("title", 'Cadastro')

@section("content")

	<div class="row">

		<div class="jumbotron" style="background-image:url(/public/image/no-money.jpg)">

			<h2 class="nd-cl-blue nd-bold">Queres Ganhar mola? sem gastar nenhum tustão?</h2>
			<p class="nd-cl-white nd-bold">Então inscreva-se no explicadoronline e torne-se em um explicador e ganhe 20% valor de incrição sobre cursos por si lecionados.</p>
			
		</div>

		<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3  col-sm-12 col-xs-12">




			@if($errors->has('name') || $errors->has('email') || $errors->has('contact')|| $errors->has('subjectList') || $errors->has('contentList') )

					<p style="color:red;"> Verifique se introduziu correctamente  os dados.</p>
			@endif

			<form method="post" action="/teachersOut">
				
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">

					<label for="name">Seu Nome</label>

					<input class="form-control" type="text" name="name" placeholder="Digite Seu Nome Completo" required="true">
					

				</div>

				<div class="form-group">

					<label for="email">Seu Email</label>

					<input class="form-control" type="mail" name="email" placeholder="Digite Seu email" required="true">
					

				</div>

				<div class="form-group">

					<label for="contact">Seu Contacto</label>

					<input class="form-control" type="number" name="contact" placeholder="Digite Seu contacto">
					

				</div>

				<div class="form-group">

					<label for="subjectList">Qual (is) Disciplina (s) Gostaria(s) de Explicar? </label>

					<textarea class="form-control" name="subjectList">
						
					</textarea>
					

				</div>

				<div class="form-group">

					<label for="contentList">Qual (is) conteudo(s)/matéria(s) Gostaria(s) de Explicar? </label>

					<textarea class="form-control" name="contentList">
						
					</textarea>
					

				</div>

				<div class="form-group">

					<input type="submit" value="Candidatar-se" class="btn btn-primary">
						
				
				</div>

				

			</form>
			
		</div>
		

	</div>


@endsection
