@extends('layout/admin');

@section('title','administration');

@section('content')



		<div class="row">

			<div class="col-lg-3 col-md-3">

			 <a href="/admin/users">


				<div class="panel panel-primary">
					
					<div class="panel-heading" class="nd-text-center">Total Users</div>
					<div class="panel-body">
					<p style="font-size:30px;" class="nd-cl-pink nd-text-center"> {{$users}}</p> 

					</div>

				</div>
			</a>
				
			</div>

			<div class="col-lg-3 col-md-3">

			 <a href="/admin/teachers">
				<div class="panel panel-primary">
					
					<div class="panel-heading" class="nd-text-center">Total Teachers</div>
					<div class="panel-body"><p style="font-size:30px;" class="nd-cl-pink nd-text-center"> {{$teachers}}</p> </div>

				</div>
			</a>
				

			</div>

			<div class="col-lg-3 col-md-3">

			 <a href="/admin/courses">

				<div class="panel panel-primary">
					
					<div class="panel-heading" class="nd-text-center">Total Courses</div>
					<div class="panel-body"><p style="font-size:30px;" class="nd-cl-pink nd-text-center"> {{$courses}}</p> </div>

				</div>

			</a>
				

			</div>

			<div class="col-lg-3 col-md-3">

			 <a href="/admin/exames">

				<div class="panel panel-primary">
					
					<div class="panel-heading" class="nd-text-center">Total Exames</div>
					<div class="panel-body"><p style="font-size:30px;" class="nd-cl-pink nd-text-center"> {{$exames}}</p> </div>

				</div>

			</a>
				

			</div>

			<div class="col-lg-3 col-md-3">

			 <a href="/admin/subjects">

				<div class="panel panel-primary">
					
					<div class="panel-heading" class="nd-text-center">Total Subject</div>
					<div class="panel-body"><p style="font-size:30px;" class="nd-cl-pink nd-text-center"> {{$subjects}}</p> </div>

				</div>

			</a>
				

			</div>

			
			

		</div>
		
		


@stop