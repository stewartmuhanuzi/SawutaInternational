@extends('layouts.page-layout')
@section('content')
<div class="container">

	<div>
		@include('layouts.breadcumb')
	</div>

	<div class="text-center">
		<h3 class="underline">
			Categories
		</h3>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<a href="/category/create">
				<button type="button" class="btn btn-primary" style="position: relative; right: 0">New Category</button>
			</a>
		</div>
	</div>

	<div>
		@if(count($category)>0)
		<table class="table">
			<thead>
				<tr>
					<th>Category Id</th>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($category as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->category_type}}</td>
					<td>
						<div class="action">
							<a href="/category/{{$category->id}}/edit">
							<button type="button" class="btn btn-success btn-sm">Edit</button>
							</a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	</div>
@endsection
