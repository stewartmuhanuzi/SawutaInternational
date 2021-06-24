@extends('layouts.page-layout')
@section('content')
<div class="container">

	<div>
		@include('layouts.breadcumb')
	</div>

	<div class="text-center">
		<h3 class="underline">
			Sales
		</h3>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<a href="/sale/create">
				<button type="button" class="btn btn-primary" style="position: relative; right: 0">New Sale</button>
			</a>
		</div>
	</div>

	<div>
		@if(count($sale) > 0)

			@foreach($sale as $sale)
				<div class="mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
				    <div class="grid grid-cols-1 md:grid-cols-2">
				        	<div class="p-6">
								<div class="flex items center">
									<a href="/sale/{{$sale->id}}">
									<img src="https://img.icons8.com/pastel-glyph/64/000000/person-male.png" class="w-6 h-8" />
						 			<div class="ml-3 text-lg leading-8 font-semibold">

						 				<a href="/sale/{{$sale->id}}" class="text-gray-900 dark:text-white" ><strong>{{$sale->product_name}}</strong>
						 				</a>

						 			</div>
						 		</div>
						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Sold To: {{$sale->client_name}}

						 			</div>
						 		</div>
						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Transaction Date: {{$sale->transaction_date}}
						 			</div>
						 		</div>
						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Paid By: {{$sale->payment_method}}
						 			</div>
						 		</div>
						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Selling Price: {{$sale->selling_price}}
						 			</div>
						 		</div>
						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Qty Sold: {{number_format($sale->quantity)}}
						 			</div>
						 		</div>
						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Amount Sold: {{number_format($sale->quantity*$sale->selling_price)}}
						 			</div>
						 		</div>


						 		<div class="ml-12 pt-4">
						 			<a href="/sale/{{$sale->id}}">
						 				<button type="button" class="btn btn-primary btn-sm">View</button>
						 			</a>

						 			<a href="/sale/{{$sale->id}}/edit">
						 				<button type="button" class="btn btn-success btn-sm">Edit</button>
						 			</a>

						 			<a href="/sale">
						 				<button type="button" class="btn btn-default btn-sm">Sale Product</button>
						 			</a>


						 		</div>


							</div>



					</div>
				</div>

			@endforeach
		@endif
	</div>

</div>

@endsection
