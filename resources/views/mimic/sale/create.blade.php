

	<div class="header-text">
		<h2>
			Sale Order
		</h2>
	</div>

	<div class="sales-form">
		<form method="post" action="{{route('sale.store')}}" enctype="multipart/form-data">
				{{csrf_field() }}
				
				<div class="form-group">
					<label>Customer Name</label>	
					<input name="customer_name" cols="5" rows="2" class="form-control" placeholder="Customer's name e.g John Doe" value="{{old('customer_name')}}"></input>
					@if($errors->has('customer_name'))
						<small class="form-text invalid-feedback">{{ $errors->first('customer_name')}} </small>
					@endif
				</div>
				
				<div class="form-group">
					<label>Product Code</label>	
					<input name="product_code" cols="5" rows="2" class="form-control" placeholder="Please enter product code e.g 0001" value="{{old('product_code')}}"></input>
					@if($errors->has('product_code'))
						<small class="form-text invalid-feedback">{{ $errors->first('product_code')}} </small>
					@endif
				</div>

				<button class="btn btn-primary py-2 px-4" type="submit">Submit</button>

	</div>
</div>	
