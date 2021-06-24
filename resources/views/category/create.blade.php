@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="col">
			<h1>
				New Category
			</h1>
		</div>


		<div class="create-category-form">

			<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
					{{csrf_field() }}

				<div class="form-group col">
					<label>Category Type</label>
					<input name="category_type" class="form-control" placeholder="Enter the Category's Name" value="{{old('category_type')}}"></input>
					@if($errors->has('category_type'))
						<small class="form-text invalid-feedback">{{ $errors->first('category_type')}} </small>
					@endif
				</div>
				<div class="container">
				<button class="btn btn-primary py-2 px-4" type="submit">Submit</button>
				</div>

			</form>

		</div>

	</div>
@endsection
