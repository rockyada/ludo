<?php if(!empty($designations)): ?>
	<option value="">Select Designation</option>
	<?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option <?php echo  ($selctedid == $designation->id) ? "selected='selected'" : ''; ""?> value="<?php echo e($designation->id); ?>"><?php echo e($designation->name); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
	<option value="">Select Designation</option>
<?php endif; ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/admin/staff/add_more_designations.blade.php ENDPATH**/ ?>