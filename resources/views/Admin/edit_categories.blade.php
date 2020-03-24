@extends('Admin.master')

@section('content')
<div id="content-wrapper">

      <div class="container-fluid">
		<form action="/Admin/{{$categories->id}}/update">
			<div class="row">
		        <div class="col-md-6">
		        	<h2>Edit Job Category</h2>
		        	<div class="form-group">
			            <label><b>Job Category</b></label>
			            <input class="form-control" type="text" value="{{$categories->job_category_name}}" name="job_category_name" placeholder="e.g. IT,Web Deigner,DBMS">
			        </div>
			        <input type="submit" style="background-color: #0062cc;color: white;" name="submit" class="btn btn-orange">
			    </div>
			</div>
		</form>
	</div>
</div>
@endsection