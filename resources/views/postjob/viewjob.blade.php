@extends('layouts.main')
@section('content')

<div id="wrapper">
	
	<div 

	id="page" 

	class="container"
	>

	<div id="content">
		<div class="title">
			<h2>JOB TITLE: {{$job->title}}</h2>
		</div>

		<div>
			<p>EMPLOYER: {{$job->company}}</p>
			<p>JOB DESCRIPTION: {{$job->description}}</p>
			<p>SALARY: {{$job->salary}}</p>
			<p>APPLICATION DEADLINE: {{$job->company}}</p>
		</div>
	
	</div>
	

	</div>
</div>
@endsection