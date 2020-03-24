<?php $__env->startSection('content'); ?>
<div id="content-wrapper">

      <div class="container-fluid">
		<form action="/Admin/<?php echo e($categories->id); ?>/subcategoriesupdate">
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
			            <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            <option value="<?php echo e($cat_name->id); ?>"><?php echo e($cat_name->job_category_name); ?></option>
				      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				      	</select>
			        </div>
		        	<div class="form-group">
			            <label><b>Job SubCategory</b></label>
			            <input class="form-control" type="text" value="<?php echo e($categories->job_subcategory_name); ?>" name="job_subcategory_name" placeholder="e.g. IT,Web Deigner,DBMS">
			        </div>
			        <div class="form-group">
			            <label><b>Change Job Category</b></label>
			            <select name="cat_id">
			            	<option value="none">Select</option>
			            	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            	<option value="<?php echo e($ct->id); ?>"><?php echo e($ct->job_category_name); ?></option>
			            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			            </select>
			        </div>
			        <input type="submit" style="background-color: #0062cc;color: white;" name="submit" class="btn btn-orange">
			    </div>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job4u\resources\views/admin/subcategory/edit_subcategories.blade.php ENDPATH**/ ?>