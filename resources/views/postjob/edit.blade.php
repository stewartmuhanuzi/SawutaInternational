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
					<h1>Edit Job Details</h1>
				<div class="col-md-6">
					@if(Session::has('flash_message'))
						<div class="alert alert-success">{{ Session::get('flash_message')}}</div>
					@endif	
					<form method="post" action="/postjob/{{$job->id}}" enctype="multipart/form-data">
						{{csrf_field() }}

						@method('PUT')
						<div class="form-group">
							<label>Company Name</label>
							<input name="company" cols="5" rows="5" class="form-control" placeholder="Company Name" value="{{$job->company}}"></input>
							@if($errors->has('company'))
								<small class="form-text invalid-feedback">{{ $errors->first('company')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Job Title</label>
							<input type="text" name="title" value="{{$job->title}}" class="form-control" placeholder="Job Title">@if($errors->has('title'))
								<small class="form-text invalid-feedback">{{ $errors->first('title')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Job Description</label>
							<textarea name="description" cols="30" rows="7" class="form-control" placeholder="Job Descriptions">{{$job->description}}</textarea>
							@if($errors->has('description'))
								<small class="form-text invalid-feedback">{{ $errors->first('description')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Salary</label>
							<input type="text" name="salary" value="" class="form-control" placeholder="In Ugandan Shillings"value="{{$job->salary}}">
							@if($errors->has('salary'))
								<small class="form-text invalid-feedback">{{ $errors->first('salary')}} </small>
							@endif
						</div>

						<div class="form-group">
							<label>Deadline for Application</label>
							<input type="date" name="deadline" value="" class="form-control" placeholder="Due Date" value="{{$job->deadline}}">
							@if($errors->has('deadline'))
								<small class="form-text invalid-feedback">{{ $errors->first('deadline')}} </small>
							@endif


						</div>
						
						<div class="form-group">
							<label for="files" class="col-md-4 col-form-label">Documents</label>
							<input type="file" class="form-control-file" id="document" name="document " value="{{$job->document}}">	
						</div>

						<button class="btn btn-primary py-2 px-4">Submit</button>
					</form>
			</div>		
		</div>	

	</body>
	</html>

@endsection