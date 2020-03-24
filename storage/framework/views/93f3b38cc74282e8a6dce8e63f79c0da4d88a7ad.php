<?php $__env->startSection('content'); ?>
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
				      	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      	<?php
				      	$cat_id=$cat->job_category_id_fk;
				      	$val=DB::select('select * from job_categories where id='.$cat_id);

				      	 ?>
				      	<tr>
				      		<td><?php echo e($cat->id); ?></td>
				      		<td><?php echo e($cat->job_subcategory_name); ?></td>
				      		<td><?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      			<?php echo e($cat_name->job_category_name); ?>

				      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				      		</td>
				      		<td>
				      			<div class="btn-group" role="group" aria-label="Basic example">
								  <a href="/Admin/<?php echo e($cat->id); ?>/subcategoriesedit" class="btn btn-warning btn-sm">Edit</a>
								  <a href="/Admin/<?php echo e($cat->id); ?>/subcategoriesdelete" class="btn btn-danger btn-sm">Delete</a>
								</div>
				      		</td>
				        </tr>
				        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				      </tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job4u\resources\views/Admin/subcategory/display_subcategories.blade.php ENDPATH**/ ?>