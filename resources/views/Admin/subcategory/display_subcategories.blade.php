@extends('Admin.master')

@section('content')
<div id="content-wrapper">

     <div class="container-fluid">
	  	<a href="/Admin/add_subcategories" style="margin-left: 38px;margin-bottom: 30px;" class="btn btn-primary">Add SubCategory</a>
		<table border="1" class="table-hover" align="center">
				      <thead>
				        <tr>
						  <th>S.No</th>
				          <th>Title</th>
				          <th>Category</th>
				          <th style="width: 10%;">Action</th>
				        </tr>
				      </thead>
				      <tbody>
				      	@foreach($category as $cat)
				      	<?php
				      	$cat_id=$cat->job_category_id_fk;
				      	$val=DB::select('select * from job_categories where id='.$cat_id);

				      	 ?>
				      	<tr>
				      		<td>{{$cat->id}}</td>
				      		<td>{{$cat->job_subcategory_name}}</td>
				      		<td>@foreach($val as $cat_name)
				      			{{$cat_name->job_category_name}}
				      			@endforeach
				      		</td>
				      		<td>
				      			<div class="btn-group" role="group" aria-label="Basic example">
								  <a href="/Admin/{{$cat->id}}/subcategoriesedit" class="btn btn-warning btn-sm">Edit</a>
								  <a href="/Admin/{{$cat->id}}/subcategoriesdelete" class="btn btn-danger btn-sm">Delete</a>
								</div>
				      		</td>
				        </tr>
				        @endforeach
				      </tbody>
		</table>
	</div>
</div>
@endsection