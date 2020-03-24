@extends('Admin.master')

@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
		<form action="/Admin/subcategoriesstore">
			<div class="row">
		        <div class="col-md-6">
		        	<h2>Add Job SubCategory</h2>
			        <div class="form-group">
			            <label><b>Job Category</b></label>
			            <select name="cat_id">
			            	@foreach($category as $ct)
			            	<option value="{{$ct->id}}">{{$ct->job_category_name}}</option>
			            	@endforeach
			            </select>
			        </div>
		        	<div class="form-group">
			            <label><b>Job SubCategory</b></label>
			            <input class="form-control" type="text" name="job_subcategory" placeholder="e.g. IT,Web Deigner,DBMS">
			        </div>
			        <input type="submit" style="background-color: #0062cc;color: white;" name="submit" class="btn btn-orange">
			    </div>
			</div>
		</form>
	</div>
</div>
@endsection