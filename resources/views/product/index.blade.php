	@extends('layouts.page-layout')
@section('content')
<div class="container">

	<div>
		@include('layouts.breadcumb')
	</div>

	<div class="text-center">
		<h3 class="underline">
			PRODUCTS
		</h3>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<a href="/product/create">
				<button type="button" class="btn btn-primary" style="position: relative; right: 0">Create Product</button>
			</a>
		</div>
	</div>

	<div>
		@if(count($product) > 0)
			<table class="table">
				<thead>
					<tr>
						<th>Product Code</th>
						<th>Product Name</th>
						<th>Product Type</th>
						<th>Stock Available</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($product as $product)
						<tr>
							<td>{{$product->product_code}}</td>
							<td>{{$product->product_name}}</td>
							<td>{{$product->product_type}}</td>
							<td>{{$product->unit}}</td>
							<td>
								<div class="action">
									<a href="/product/{{$product->id}}">
										<button type="button" class="btn btn-primary btn-sm">View</button>
									</a>

									<a href="/product/{{$product->id}}/edit">
										<button type="button" class="btn btn-success btn-sm">Edit</button>
									</a>

									<a href="/sale">
										<button type="button" class="btn btn-default btn-sm">Sale Product</button>
									</a>


								</div>

							</td>
						</tr>
						@endforeach
				</tbody>

			</table>

		@endif
	</div>

</div>

@endsection
