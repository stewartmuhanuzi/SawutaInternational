@extends('layouts.main')

@section('content')	
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
			<title>Hire with Us</title>

			<link rel="stylesheet" href="/css/app.css">
			<style>
				.invalid-feedback{
				display:block;
			}
			</style>
	</head>
	<body>
		<div class="container">
				<h1>Post A Job</h1>
				<div class="col-md-6">
					@if(Session::has('flash_message'))
						<div class="alert alert-success">{{ Session::get('flash_message')}}</div>
					@endif	
					<form method="post" action="{{ route('postjob.store')}}" enctype="multipart/form-data">
						{{csrf_field() }}
						<div class="form-group">
							<label>Company Name</label>
							<textarea name="company" cols="5" rows="5" class="form-control" placeholder="Company Name"></textarea>
							@if($errors->has('company'))
								<small class="form-text invalid-feedback">{{ $errors->first('company')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Job Title</label>
							<input type="text" name="title" value="" class="form-control" placeholder="Job Title">@if($errors->has('title'))
								<small class="form-text invalid-feedback">{{ $errors->first('title')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Job Description</label>
							<textarea name="description" cols="30" rows="7" class="form-control" placeholder="Job Descriptions"></textarea>
							@if($errors->has('description'))
								<small class="form-text invalid-feedback">{{ $errors->first('description')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Salary</label>
							<input type="text" name="salary" value="" class="form-control" placeholder="In Ugandan Shillings">
							@if($errors->has('salary'))
								<small class="form-text invalid-feedback">{{ $errors->first('salary')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Deadline for Apllication</label>
							<input type="text" name="deadline" value="" class="form-control" placeholder="">
							@if($errors->has('deadline'))
								<small class="form-text invalid-feedback">{{ $errors->first('deadline')}} </small>
							@endif


						</div>

						<div class="form-group">
							<label for="files">Additional Documents</label>
							<input type="file" class="form-control" id="document" name="document">	
						</div>
						<button class="btn btn-primary py-2 px-4">Submit</button>




					</form>
			</div>		
		</div>	

	</body>
	</html>

@endsection