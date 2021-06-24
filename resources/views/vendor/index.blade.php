@extends('layouts.page-layout')
@section('content')
<div class="container">

	<div class="text-center">
		<h3 class="underline">
			REGISTERED VENDORS
		</h3>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<a href="/vendor/create">
				<button type="button" class="btn btn-primary"  style="position: relative; right: 0">Create New Vendor</button>
			</a>		
		</div> 	
	</div>

	<div>	
		@if(count($vendor) > 0)
				
			@foreach($vendor as $vendor)
				<div class="mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
				    <div class="grid grid-cols-1 md:grid-cols-2">
				        	<div class="p-6">
								<div class="flex items center">
									<a href="/vendor/{{$vendor->id}}">
									<img src="https://img.icons8.com/pastel-glyph/64/000000/person-male.png" class="w-6 h-8" />
						 			<div class="ml-3 text-lg leading-8 font-semibold">
						 				
						 				<a href="/vendor/{{$vendor->id}}" class="text-gray-900 dark:text-white" ><strong>{{$vendor->salutation}}</strong> <strong>{{$vendor->name}}</strong>
						 				</a>
						 			
						 			</div>
						 		</div>
						 		
						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Address: {{$vendor->address}}
						 			</div>
						 		</div>

						 		<div class="ml-12">
						 			<div class="mt-0 mr-8 text-gray-600 dark:text-gray-400 text-sm">
						 				Phone: {{$vendor->phone}}

						 			</div>
						 		</div>
						 				
						 		<div class="ml-12 pt-4">
						 			<a href="/vendor/{{$vendor->id}}">
						 				<button type="button" class="btn btn-primary btn-sm">View</button>
						 			</a>
						 				
						 			<a href="/vendor/{{$vendor->id}}/edit">
						 				<button type="button" class="btn btn-success btn-sm">Edit</button>
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



	

