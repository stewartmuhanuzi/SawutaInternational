<div>
@if(count($product) > 0)

	@foreach($product as $product)
		<div>
			{{$product->product_code}}	
		</div>
	@endforeach
@endif
</div>