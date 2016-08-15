@extends('layout/admin')

@section('title', 'Update');

@section('content')

<div class="row nd-bg-white container-padding">
	
	<div class="col-lg-12 col-md-12">

	<form >

		<div class="form-group">

			<label for="name"> Name</label>
			<input type="text" value="{{$user->name}}" name="name" class="form-control">

		</div>

		<div class="form-group">

			<label for="email">Email</label>
			
			<input type="email" value="{{$user->email}} " name="email" class="form-control" disabled="true">

		</div>

		<div class="form-group">

			<label for="contact">Contact</label>			
			<input type="number" value="{{$user->contact}}" name="contact" class="form-control">

		</div>

		<div class="form-group">

			<label for="image">Change Picture</label>	
			<input type="file" value="	{{$user->image}}" name="image" class="form-control">

			<img src="{{$user->image}}">

		</div>


		<div class="form-group">
			
			<input type="submit" value="update"  class="form-control  nd-btn-md nd-bg-blue nd-cl-white">

		</div>





		


	</form>



		
		

		

	</div>


</div>


@stop