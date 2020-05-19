@extends('layouts.main')

@section('content')
	<!DOCTYPE html>
	<html>
	<head>
		<title>Available Jobs</title>
	</head>
	<body>
		<div id="content">
			<h1>Jobs Available</h1>
			<--Loop through all jobs from the database-->
			@if(count($postjob) > 0)
				@foreach($postjob as $post)
				<ul class="list-group">
					<li class="list-group-item">Company Name: {{ $post->company}}</li>
					<li class="list-group-item">Job Title: {{ $post->title}}</li>
					<li class="list-group-item">Job description: {{ $post->description}}</li>
					<li class="list-group-item">Salary: {{ $post->salary}}</li>
					<li class="list-group-item">Application Deadline: {{ $post->deadline}}</li>
					<li class="list-group-item">Documents: {{ $post->document}}</li>
				</ul>	
				@endforeach
			@endif
		</div>
	</body>
	</html>
@endsection	