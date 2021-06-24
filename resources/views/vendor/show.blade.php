@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="heading">
			<h2>
				<img src="https://img.icons8.com/pastel-glyph/64/000000/person-male.png"/>
				<strong>{{$vendor->name}}</strong>
			</h2>
		</div>

		<div class="create-form">
			
			<form method="post" action="{{route('vendor.destroy', $vendor->id)}}" enctype="multipart/form-data">
					@method('DELETE')
					{{csrf_field() }}
				<div class="ml-8 pt-4">
					<a href="/vendor/{{$vendor->id}}/edit">
						<button type="button" class="btn btn-success btn-sm">Edit Profile</button>
					</a>

					<a href="">
						<button type="button" class="btn btn-danger btn-sm">Delete Vendor</button>

					</a>
				</div>	
				
				<div class="form-group">
					<label>Salutation</label>	
					<select class="form-control" id="salutation" name="salutation" disabled="true">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
					</select>
					@if($errors->has('salutation'))
						<small class="form-text invalid-feedback">{{ $errors->first('salutation')}} </small>
					@endif
				</div>	

				<div class="form-group">
					<label>Name</label>
					<input name="name" cols="5" rows="2" class="form-control" placeholder="Name" value="{{old('name', $vendor->name)}}" disabled="true"></input>
					@if($errors->has('name'))
						<small class="form-text invalid-feedback">{{ $errors->first('name')}} </small>
					@endif
				</div>

				<div class="form-group">
					<label>Address</label>
					<input name="address" cols="5" rows="5" class="form-control" placeholder="Address" value="{{old('address', $vendor->address)}}" disabled="true"></input>
					@if($errors->has('address'))
						<small class="form-text invalid-feedback">{{ $errors->first('address')}} </small>
					@endif
				</div>
				
				<div class="form-group">
					<label>Contact Person</label>
					<input name="contactPerson" cols="5" rows="5" class="form-control" placeholder="Contact Person" value="{{old('contactPerson', $vendor->contactPerson)}}" disabled="true"></input>
					@if($errors->has('contactPerson'))
						<small class="form-text invalid-feedback">{{ $errors->first('contactPerson')}} </small>
					@endif
				</div>

				<div class="form-group">
					<label>Phone</label>
					<input name="phone" cols="5" rows="5" class="form-control" placeholder="Phone Number" value="{{old('phone', $vendor->phone)}}" disabled="true"></input>
					@if($errors->has('phone'))
						<small class="form-text invalid-feedback">{{ $errors->first('phone')}} </small>
					@endif
				</div>
				
				<div class="form-group">
					<label>Status</label>
					
					<select class="form-control" id="status" name="status" disabled="true">
						<option value="{{old('status', $vendor->status)}}">Active</option>
						<option value="{{old('status', $vendor->status)}}">Inactive</option>
					</select>
					@if($errors->has('status'))
						<small class="form-text invalid-feedback">{{ $errors->first('status')}} </small>
					@endif
				</div>

			</form>
		
		</div>
			
	</div>
@endsection
