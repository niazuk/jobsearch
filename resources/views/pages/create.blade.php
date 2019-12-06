@extends('layouts.layout')
@section('content')
<div class="jumbotron">
	<div class="col-sm-10"><h1 style="text-align: center;">Create A New Job Advertisement.</h1></div> 
	<form class="form-horizontal" method="post" action="/job">
		@csrf
		<div class="form-group">
			<label class="control-label col-sm-2" for="title">Job Title:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="title" name="title" placeholder="Enter Job Title" value="{{old('title')}}" required>
				@error('title')
				<p class="text-danger">{{ $errors->first('title')}} </p>
				@enderror
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="location">Location:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="location" name="location" placeholder="Enter Job Location" value="{{old('location')}}" required>
				@error('location')
				<p class="text-danger">{{ $errors->first('location')}}</p>
				@enderror
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="salary">Salary Range:</label>
			<div class="row col-sm-12">
				<div class="col-sm-4">
					<input type="number" class="form-control" id="salarymin" name="salarymin" placeholder="Enter Salary Min" value="{{old('salarymin')}}" required>
					@error('salarymin')
					<p class="text-danger">{{ $errors->first('salarymin')}}</p>
					@enderror
				</div>
				<div class="col-sm-1"><samp>to</samp></div>
				<div class="col-sm-4">
					<input type="number" class="form-control" id="salarymax" name="salarymax" placeholder="Enter Salary Max" value="{{old('salarymax')}}"  required>
					@error('salarymax')
					<p class="text-danger">{{ $errors->first('salarymax')}}</p>
					@enderror
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="description">Job Description:</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="10" id="description" name="description" placeholder="Enter Job Location" value="{{old('description')}}" required></textarea>
				@error('description')
				<p class="text-danger">{{ $errors->first('description')}}</p>
				@enderror
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection