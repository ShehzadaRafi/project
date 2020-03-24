@extends('Admin.master')

@section('content')
<div id="content-wrapper">

     <div class="container-fluid">
		<table border="1" class="table-hover" align="center">
			<thead>
		        <tr>
			    	<th>S.No</th>
	            	<th>User Name</th>
	            	<th>User Email</th>
	            	<th>User Phone</th>
	            	<th>User Type</th>
	            	<th>User Status</th>
	            	<th style="width: 10%;">Action</th>
	        	</tr>
	        </thead>
				      <tbody>
				      	<?php
				      	$val=DB::select('select * from users where user_type_id_fk=2');

				      	 ?>
				      	 @foreach($val as $cat)
				      	 <?php 
				      	 $type_id=$cat->user_type_id_fk;
				      	 $status_code=$cat->status;
				      	 $type=DB::select('select * from user_type where id='.$type_id);
				      	 $status=DB::select('select * from status where status_codes='.$status_code);
				      	  ?>
				      	<tr>
				      		<td>{{$cat->id}}</td>
				      		<td>{{$cat->username}}</td>
				      		<td>{{$cat->email}}</td>
				      		<td>{{$cat->user_phone}}</td>
				      		<td>@foreach($type as $typ)
				      			{{$typ->user_type_name}}
				      		@endforeach</td>
				      		<td>@foreach($status as $stat)
				      			{{$stat->status_names}}
				      		@endforeach</td>
				      		<td>
				      			<form action="/Admin/{{$cat->id}}/candidatestupdate">
				      				<select name="status_name">
				      				<option value="112">Pending</option>
				      				<option value="113">Approved</option>
				      				<option value="114">Cancel</option>
				      			</select>
				      			<input type="submit" name="submit" value="submit">
				      			</form>
				      			
				      		</td>
				        </tr>
				        @endforeach
				      </tbody>
		</table>
	</div>
</div>

@endsection