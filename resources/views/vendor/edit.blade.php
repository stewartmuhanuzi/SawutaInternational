@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="header-text">
			<h1>
				Edit Profile
			</h1>
		</div>
		<div class="ml-22">
			<h4>
				<small>
					Created at {{ $vendor->created_at}}
				</small>
				
				<small class="">
					Updated {{$vendor->updated_at->diffForHumans()}} 
				</small>

			</h4>
		</div>

		<div class="edit-form">
			
			<form method="post" action="{{route('vendor.update', $vendor->id)}}" enctype="multipart/form-data">
					@method("PUT")
					{{csrf_field() }}
				<div class="form-group">
					<label>Salutation</label>	
					<select class="form-control" id="salutation" name="salutation">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
					</select>
					@if($errors->has('salutation'))
						<small class="form-text invalid-feedback">{{ $errors->first('salutation')}} </small>
					@endif
				</div>

				<div class="form-group">
					<label>Name</label>
					<input name="name" cols="5" rows="2" class="form-control" placeholder="Name" value="{{old('name', $vendor->name)}}"></input>
					@if($errors->has('name'))
						<small class="form-text invalid-feedback">{{ $errors->first('name')}} </small>
					@endif
				</div>

				<div class="form-group">
					<label>Address</label>
					<input name="address" cols="5" rows="5" class="form-control" placeholder="Address" value="{{old('address', $vendor->address)}}"></input>
					@if($errors->has('address'))
						<small class="form-text invalid-feedback">{{ $errors->first('address')}} </small>
					@endif
				</div>
				
				<div class="form-group">
					<label>Contact Person</label>
					<input name="contactPerson" cols="5" rows="5" class="form-control" placeholder="Contact Person" value="{{old('contactPerson', $vendor->contactPerson)}}"></input>
					@if($errors->has('contactPerson'))
						<small class="form-text invalid-feedback">{{ $errors->first('contactPerson')}} </small>
					@endif
				</div>

				<div class="form-group">
					<label>Phone</label>
					<input name="phone" cols="5" rows="5" class="form-control" placeholder="Phone Number" value="{{old('phone', $vendor->phone)}}"></input>
					@if($errors->has('phone'))
						<small class="form-text invalid-feedback">{{ $errors->first('phone')}} </small>
					@endif
				</div>
				
				<div class="form-group">
					<label>Status</label>
					
					<select class="form-control" id="status" name="status">
						<option value="1">Active</option>
						<option value="0">Inactive</option>
					</select>
					@if($errors->has('status'))
						<small class="form-text invalid-feedback">{{ $errors->first('status')}} </small>
					@endif
				</div>

				<button class="btn btn-primary py-2 px-4" type="submit">Submit</button>

			</form>
		
		</div>
			
	</div>
@endsection
