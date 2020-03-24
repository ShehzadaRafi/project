@extends('Admin.master')

@section('content')
<div id="content-wrapper">

     <div class="container-fluid">
	  	<a href="/Admin/add_categories" style="margin-left: 38px;margin-bottom: 30px;" class="btn btn-primary">Add Category</a>
		<table border="1" class="table-hover" align="center">
				      <thead>
				        <tr>
						  <th>S.No</th>
				          <th>Title</th>
				          <th style="width: 10%;">Action</th>
				        </tr>
				      </thead>
				      <tbody>
				      	@foreach($category as $cat)
				      	<tr>
				      		<td>{{$cat->id}}</td>
				      		<td>{{$cat->job_category_name}}</td>
				      		<td>
				      			<div class="btn-group" role="group" aria-label="Basic example">
								  <a href="/Admin/{{$cat->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
								  <a href="/Admin/{{$cat->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
								</div>
				      		</td>
				        </tr>
				        @endforeach
				      </tbody>
		</table>
	</div>
</div>
@endsection