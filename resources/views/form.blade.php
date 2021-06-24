<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div>
  <div>
    <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on top
    </button>
   </div> 


<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on right
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on bottom
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on left
</button>
</div>

class="rounded-circle w-100" style="max-width: 50px;"






<div class="form-group">
	<label>Product Name</label>
	<input name="product_name" cols="5" rows="2" class="form-control" placeholder="Please enter product name" value="{{old('product_name')}}"></input>
	@if($errors->has('product_name'))
		<small class="form-text invalid-feedback">{{ $errors->first('product_name')}} </small>
	@endif
</div>

<div class="form-group">
	<label>Quantity</label>
	<input name="quanity" cols="5" rows="5" class="form-control" placeholder="Quantity Purchased" value="{{old('quantity')}}"></input>
	
</div>

<div class="form-group">
	<label>Unit Price</label>
	<input name="unit_price" cols="5" rows="5" class="form-control" placeholder="Enter price per product" value="{{old('selling_price')}}"></input>
	@if($errors->has('unit_price'))
		<small class="form-text invalid-feedback">{{ $errors->first('unit_price')}} </small>
	@endif
</div>

<div class="form-group">
	<label>Total Amount</label>
	<input name="total_amount" cols="5" rows="5" class="form-control" placeholder="" value="{{old('total_amount')}}"></input>
	@if($errors->has('total_amount'))
		<small class="form-text invalid-feedback">{{ $errors->first('total_amount')}} </small>
	@endif
</div>

<div class="form-group">
	<label>Payment Method</label>	
	<select class="form-control" id="payment_method" name="payment_method">
		<option value="Cash">Cash</option>
		<option value="MM">Mobile Money</option>
		<option value="Bank">Bank</option>
	</select>
	@if($errors->has('payment_method'))
		<small class="form-text invalid-feedback">{{ $errors->first('payment_method')}} </small>
	@endif
</div>
