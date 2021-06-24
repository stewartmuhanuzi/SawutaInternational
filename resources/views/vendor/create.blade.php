@extends('layouts.page-layout')
@section('content')
	<div class="container">

		<div class="header-text">
			<h1>
				Create New Vendor
			</h1>
		</div>
<!-- 		<div class="col-md-6">
 -->		<div class="create-form">
			
			<form method="post" action="{{route('vendor.store')}}" enctype="multipart/form-data">
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
					<input name="name" cols="5" rows="2" class="form-control" placeholder="Name" value="{{old('name')}}"></input>
					@if($errors->has('name'))
						<small class="form-text invalid-feedback">{{ $errors->first('name')}} </small>
					@endif
				</div>

				<div class="form-group">
					<label>Address</label>
					<input name="address" cols="5" rows="5" class="form-control" placeholder="Address" value="{{old('address')}}"></input>
					@if($errors->has('address'))
						<small class="form-text invalid-feedback">{{ $errors->first('address')}} </small>
					@endif
				</div>
				
				<div class="form-group">
					<label>Contact Person</label>
					<input name="contactPerson" cols="5" rows="5" class="form-control" placeholder="Contact Person" value="{{old('contactPerson')}}"></input>
					@if($errors->has('contactPerson'))
						<small class="form-text invalid-feedback">{{ $errors->first('contactPerson')}} </small>
					@endif
				</div>

				<div class="form-group">
					<label>Phone</label>
					<input name="phone" cols="5" rows="5" class="form-control" placeholder="Phone Number" value="{{old('phone')}}"></input>
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
