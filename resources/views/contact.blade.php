@extends('layouts.main')

@section('content')
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Contact Us</title>
		<style>
			.invalid-feedback{
				display:block;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Contact Us</h1>

			<div class="row">
				<div class="col-md-6">
					@if(Session::has('flash_message'))
						<div class="alert alert-success">{{ Session::get('flash_message')}}</div>
					@endif	
				<form method="post" action="{{ route('contact.store')}}">
					{{csrf_field() }}
					<div class="form-group is">
						<input type="text" name="name" value="" class="form-control" placeholder="Your Name">
						@if($errors->has('name'))
							<small class="form-text invalid-feedback">{{ $errors->first('name')}} </small>
						@endif
					</div>

					<div class="form-group">
						<input type="text" name="email" value="" class="form-control" placeholder="Your Email">
						@if($errors->has('email'))
							<small class="form-text invalid-feedback">{{ $errors->first('email')}} </small>
						@endif
					</div>

					<div class="form-group">
						<input type="text" name="subject" value="" class="form-control" placeholder="Subject">
						@if($errors->has('subject'))
							<small class="form-text invalid-feedback">{{ $errors->first('subject')}} </small>
						@endif
					</div>

					<div class="form-group">
						<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						@if($errors->has('message'))
							<small class="form-text invalid-feedback">{{ $errors->first('message')}} </small>
						@endif
					</div>
					<button class="btn btn-primary py-3 px-5">Submit</button>
			</form>
		</div>	
					
				</div>
				
			</div>
	</body>
	</html>
@endsection