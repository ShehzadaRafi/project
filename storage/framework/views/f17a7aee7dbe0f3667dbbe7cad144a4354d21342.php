<?php $__env->startSection('content'); ?>
<div id="content-wrapper">

      <div class="container-fluid">
		<form action="/Admin/Categorystore">
			<div class="row">
		        <div class="col-md-6">
		        	<h2>Add Job Category</h2>
		        	<div class="form-group">
			            <label><b>Job Category</b></label>
			            <input class="form-control" type="text" name="job_category" placeholder="e.g. IT,Web Deigner,DBMS">
			        </div>
			        <input type="submit" style="background-color: #0062cc;color: white;" name="submit" class="btn btn-orange">
			    </div>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job4u\resources\views/Admin/add_categories.blade.php ENDPATH**/ ?>