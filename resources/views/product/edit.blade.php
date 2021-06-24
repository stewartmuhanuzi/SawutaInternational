@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="header-text">
			<h1>
				<strong> {{$product->product_code}}:</strong> <strong>{{$product->product_name}}</strong>
			</h1>
		</div>


		<div class="create-product-form">

			<form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
					@method("PUT")
					{{csrf_field() }}
				<div class="row">
				<div class="form-group col">
					<label>Product Code</label>
					<input name="product_code" cols="5" rows="2" class="form-control" value="{{old('product_code',$product->product_code)}}"></input>
					@if($errors->has('salutation'))
						<small class="form-text invalid-feedback">{{ $errors->first('salutation')}} </small>
					@endif
				</div>

				<div class="form-group col">
					<label>Product Type</label>
					<input name="product_type" cols="5" rows="2" class="form-control" disabled="true" value="{{old('product_type',$product->product_type)}}"></input>
					@if($errors->has('product_type'))
						<small class="form-text invalid-feedback">{{ $errors->first('product_type')}} </small>
					@endif
				</div>
				</div>

				<div class="row">
				<div class="form-group col">
					<label>Product Name</label>
					<input name="product_name" cols="5" rows="2" class="form-control" value="{{old('product_name',$product->product_name)}}"></input>
					@if($errors->has('product_name'))
						<small class="form-text invalid-feedback">{{ $errors->first('product_name')}} </small>
					@endif
				</div>

				<div class="form-group col">
					<label>Unit Price</label>
					<input name="price" cols="5" rows="5" class="form-control" value="{{old('price', $product->price)}}"></input>
					@if($errors->has('price'))
						<small class="form-text invalid-feedback">{{ $errors->first('price')}} </small>
					@endif
				</div>
				</div>

				<div class="form-group">
					<label>Stock Available</label>
					<input name="unit" cols="5" rows="5" class="form-control" value="{{old('unit', $product->unit)}}"></input>
				</div>
				<div class="form-group">
					<label>Information</label>
					<textarea name="information" cols="20" rows="10" class="form-control" value="{{old('information', $product->information)}}"></textarea>
					@if($errors->has('information'))
						<small class="form-text invalid-feedback">{{ $errors->first('information')}} </small>
					@endif
				</div>


				<button class="btn btn-primary py-2 px-4" type="submit">Update</button>

			</form>

		</div>

	</div>
@endsection
