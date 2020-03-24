<?php $__env->startSection('content'); ?>
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
				      	 <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      	 <?php 
				      	 $type_id=$cat->user_type_id_fk;
				      	 $status_code=$cat->status;
				      	 $type=DB::select('select * from user_type where id='.$type_id);
				      	 $status=DB::select('select * from status where status_codes='.$status_code);
				      	  ?>
				      	<tr>
				      		<td><?php echo e($cat->id); ?></td>
				      		<td><?php echo e($cat->username); ?></td>
				      		<td><?php echo e($cat->email); ?></td>
				      		<td><?php echo e($cat->user_phone); ?></td>
				      		<td><?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      			<?php echo e($typ->user_type_name); ?>

				      		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
				      		<td><?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      			<?php echo e($stat->status_names); ?>

				      		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
				      		<td>
				      			<form action="/Admin/<?php echo e($cat->id); ?>/candidatestupdate">
				      				<select name="status_name">
				      				<option value="112">Pending</option>
				      				<option value="113">Approved</option>
				      				<option value="114">Cancel</option>
				      			</select>
				      			<input type="submit" name="submit" value="submit">
				      			</form>
				      			
				      		</td>
				        </tr>
				        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				      </tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job4u\resources\views/admin/candidates.blade.php ENDPATH**/ ?>