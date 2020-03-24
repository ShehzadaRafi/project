@extends('Admin.master')

@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
		<form action="/Admin/{{$categories->id}}/subcategoriesupdate">
			<div class="row">
		        <div class="col-md-6">
		        	<h2>Edit Job SubCategory</h2>
		        	<?php
				      	$cat_id=$categories->job_category_id_fk;
				      	$val=DB::select('select * from job_categories where id='.$cat_id);

				      	 ?>
		        	<div class="form-group">
			            <label><b>Previous Job Category</b></label>
			            <select name="prev_cat_id">
			            @foreach($val as $cat_name)
			            <option value="{{$cat_name->id}}">{{$cat_name->job_category_name}}</option>
				      	@endforeach
				      	</select>
			        </div>
		        	<div class="form-group">
			            <label><b>Job SubCategory</b></label>
			            <input class="form-control" type="text" value="{{$categories->job_subcategory_name}}" name="job_subcategory_name" placeholder="e.g. IT,Web Deigner,DBMS">
			        </div>
			        <div class="form-group">
			            <label><b>Change Job Category</b></label>
			            <select name="cat_id">
			            	<option value="none">Select</option>
			            	@foreach($category as $ct)
			            	<option value="{{$ct->id}}">{{$ct->job_category_name}}</option>
			            	@endforeach
			            </select>
			        </div>
			        <input type="submit" style="background-color: #0062cc;color: white;" name="submit" class="btn btn-orange">
			    </div>
			</div>
		</form>
	</div>
</div>
@endsection