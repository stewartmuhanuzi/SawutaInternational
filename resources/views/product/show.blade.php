@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="header-text">
			<h1>
				<strong> {{$product->product_code}}</strong> <strong>:{{$product->product_name}}</strong>
			</h1>
		<div class="ml-10 pt-2">
			<a href="/product/{{$product->id}}/edit">
				<button type="button" class="btn btn-success btn-sm">Edit Product</button>
			</a>
			<a href="/product">
				<button type="button" class="btn btn-danger btn-sm">Delete Product</button>
			</a>

		</div>

		</div>

		<div class="create-product-form">

			<form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
					{{csrf_field() }}
				<div class="row">
				<div class="form-group col">
					<label>Product Code</label>
					<input name="product_code" cols="5" rows="2" class="form-control" disabled="true" value="{{old('product_code',$product->product_code)}}"></input>
					@if($errors->has('salutation'))
						<small class="form-text invalid-feedback">{{ $errors->first('salutation')}} </small>
					@endif
				</div>
				<div class="form-group col">
					<label>Product Type</label>
					<input name="product_type" cols="5" rows="2" class="form-control" disabled="true" value="{{old('product_type',$product->product_type)}}"></input>
					@if($errors->has('product_type'))
						<small class="form-text invalid-feedback">{{ $errors->first('name')}} </small>
					@endif
				</div>
				</div>

				<div class="row">
				<div class="form-group col">
					<label>Product Name</label>
					<input name="product_name" cols="5" rows="2" class="form-control" disabled="true" value="{{old('product_name',$product->product_name)}}"></input>
					@if($errors->has('product_name'))
						<small class="form-text invalid-feedback">{{ $errors->first('name')}} </small>
					@endif
				</div>

				<div class="form-group col">
					<label>Price</label>
					<input name="price" cols="5" rows="5" class="form-control" disabled="true" value="{{old('purchase_price', $product->price)}}"></input>
					@if($errors->has('price'))
						<small class="form-text invalid-feedback">{{ $errors->first('price')}} </small>
					@endif
				</div>
				</div>
				<div class="form-group">
					<label>Stock Available</label>
					<input name="unit" cols="5" rows="5" class="form-control" value="{{old('unit', $product->unit)}}" disabled="true"></input>
				</div>

				<div class="form-group">
					<label>Information</label>
					<textarea name="information" cols="20" rows="10" class="form-control" value="{{old('information', $product->information)}}" disabled="true"></textarea>
					@if($errors->has('information'))
						<small class="form-text invalid-feedback">{{ $errors->first('information')}} </small>
					@endif
				</div>

				<button class="btn btn-primary py-2 px-4" type="submit" disabled="true">Submit</button>

			</form>

		</div>

	</div>
@endsection
