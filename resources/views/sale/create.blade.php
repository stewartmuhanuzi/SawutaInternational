@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="col">
			<h1>
				New Product Sale
			</h1>
		</div>


		<div class="create-sale-form">

			<form method="post" action="{{route('sale.store')}}" enctype="multipart/form-data">
					{{csrf_field() }}
				<div class="form-group col">
					<label>Customer's Name</label>
					<input name="client_name" class="form-control" placeholder="Enter the Customer's Name" value="{{old('client_name')}}"></input>
					@if($errors->has('client_name'))
						<small class="form-text invalid-feedback">{{ $errors->first('client_name')}} </small>
					@endif
				</div>

				<div class="row">
				<div class="form-group col-md-4">
					<label>Product</label>
					<input name="product_name" class="form-control" placeholder="Enter product name" value="{{old('product_name')}}"></input>
					@if($errors->has('product_name'))
						<small class="form-text invalid-feedback">{{ $errors->first('product_name')}} </small>
					@endif
				</div>

				<div class="form-group col-md-4">
					<label>Selling Price</label>
					<input name="selling_price" cols="5" rows="2" class="form-control" placeholder="Selling Price" value="{{old('selling_price')}}"></input>
					@if($errors->has('selling_price'))
						<small class="form-text invalid-feedback">{{ $errors->first('selling_price')}} </small>
					@endif
				</div>
				<div class="form-group col-md-4">
					<label>Quantity Sold</label>
					<input name="quantity" cols="5" rows="5" class="form-control" placeholder="" value="{{old('price')}}"></input>
					@if($errors->has('quantity'))
						<small class="form-text invalid-feedback">{{ $errors->first('quantity')}} </small>
					@endif
				</div>
				</div>

				<div class="form-check">
					<div>Payment Method</div>
				  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
				  <label class="form-check-label" for="flexRadioDefault2">
				    Cash
				  </label>
				  <div>
				  <small>All sales must currently be taken in cash</small>
				  </div>
				</div>

				<div class="row">
				<div class="form-group col">
					<label>Transaction Date</label>
					<input name="transaction_date" cols="5" rows="5" class="form-control" placeholder="2021-02-23" value="{{old('transaction_date')}}"></input>
					@if($errors->has('transaction_date'))
						<small class="form-text invalid-feedback">{{ $errors->first('transaction_date')}} </small>
					@endif
				</div>

				<div class="form-group col">
					<label>Branch Name</label>
					<input name="branch_name" cols="5" rows="5" class="form-control" placeholder="Select the branch_name" value="{{old('branch_name')}}"></input>
					@if($errors->has('branch_name'))
						<small class="form-text invalid-feedback">{{ $errors->first('branch_name')}} </small>
					@endif
				</div>
				</div>

				<button class="btn btn-primary py-2 px-4" type="submit">Submit</button>

			</form>

		</div>

	</div>
@endsection
