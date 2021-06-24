@extends('layouts.page-layout')
@section('content')
	<div class="container">

			<div class="header-text">
				<h1>
					<strong>{{$category->category_type}}</strong>
				</h1>
			</div>

		<div class="create-category-form">

			<form method="post" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
					@method("PUT")
					{{csrf_field() }}

				<div class="form-group col">
					<label>Category Type</label>
					<input name="category_type" class="form-control" placeholder="Enter the Category's Name" value="{{old('category_type', $category->category_type)}}"></input>
					@if($errors->has('category_type'))
						<small class="form-text invalid-feedback">{{ $errors->first('category_type')}} </small>
					@endif
				</div>
				<div class="container">
				<button class="btn btn-primary py-2 px-4" type="submit">Save Changes</button>
				</div>

			</form>

		</div>

	</div>
@endsection
