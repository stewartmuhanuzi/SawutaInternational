@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="col">
			<h1>
				New Product
			</h1>
		</div>


		<div class="create-product-form">

			<form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
					{{csrf_field() }}
				<div class="row">
				<div class="form-group col">
					<label>Product Code</label>
					<input name="product_code" class="form-control" placeholder="Please enter product code e.g 0001" value="{{old('product_code')}}"></input>
					@if($errors->has('product_code'))
						<small class="form-text invalid-feedback">{{ $errors->first('product_code')}} </small>
					@endif
				</div>

				<div class="form-group col">
					<label>Product Type</label>
					<input name="product_type" class="form-control" placeholder="Please enter product type" value="{{old('product_type')}}"></input>
					@if($errors->has('product_type'))
						<small class="form-text invalid-feedback">{{ $errors->first('product_type')}} </small>
					@endif
				</div>
				</div>

				<div class="row">
				<div class="form-group col">
					<label>Product Name</label>
					<input name="product_name" cols="5" rows="2" class="form-control" placeholder="Please enter product name" value="{{old('product_name')}}"></input>
					@if($errors->has('product_name'))
						<small class="form-text invalid-feedback">{{ $errors->first('product_name')}} </small>
					@endif
				</div>

				<div class="form-group col">
					<label>Price</label>
					<input name="price" cols="5" rows="5" class="form-control" placeholder="Enter purchasing price" value="{{old('price')}}"></input>
					@if($errors->has('price'))
						<small class="form-text invalid-feedback">{{ $errors->first('price')}} </small>
					@endif
				</div>
				</div>

				<div class="form-group">
					<label>Unit</label>
					<input name="unit" cols="5" rows="5" class="form-control" placeholder="Unit Available" value="{{old('unit')}}"></input>
				</div>

				<div class="form-group">
					<label>Information</label>
					<textarea name="information" cols="20" rows="10" class="form-control" placeholder="Information" value="{{old('information')}}"></textarea>
					@if($errors->has('information'))
						<small class="form-text invalid-feedback">{{ $errors->first('information')}} </small>
					@endif
				</div>
				<button class="btn btn-primary py-2 px-4" type="submit">Submit</button>

			</form>

		</div>

	</div>
@endsection
