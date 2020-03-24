<?php $__env->startSection('content'); ?>
<div id="content-wrapper">

      <div class="container-fluid">
		<form action="/Admin/subcategoriesstore">
			<div class="row">
		        <div class="col-md-6">
		        	<h2>Add Job SubCategory</h2>
			        <div class="form-group">
			            <label><b>Job Category</b></label>
			            <select name="cat_id">
			            	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            	<option value="<?php echo e($ct->id); ?>"><?php echo e($ct->job_category_name); ?></option>
			            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job4u\resources\views/Admin/subcategory/add_subcategories.blade.php ENDPATH**/ ?>