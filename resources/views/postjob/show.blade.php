@extends('layouts.main')
@section('content')
	<!DOCTYPE html>
	<html>
	<head>
		<title>Available Jobs</title>
	</head>
	<body>
		
		<div id="content">
			<h3 class="uppercase tracking-wider text-orange text-lg font-semibold ">Jobs Available</h3>
			<hr> 
			@if(count($postjob) > 0)

				@foreach($postjob as $post)
					<article>
						<div class="Job Title"> Job Title:
							<a href="/postjob/{{$post->id}}">{{$post->title}}</a>		
						
						</div>
 						<h4>Company Name: {{ $post->company}}</h4>
						<div class="Job description">Job descritpion: {{$post->description}}</div>
						

						{{-- <div class="Salary">Salary: {{$post->salary}}</div>
						<div class="Application Deadline">Application Deadline: {{$post->deadline}}</div>
						<div class="Documents">Documents: {{$post->document}}</div> --}}
						{{-- <div class="btn-group">
						<a href="{{ route('album-show', $album->id )}}" class="btn btn-sm btn-outline-secondary">View Job</a>
						</div --}}

					</article>
			<hr>
				@endforeach
			@endif
		</div>
	</body>
	</html>
@endsection	