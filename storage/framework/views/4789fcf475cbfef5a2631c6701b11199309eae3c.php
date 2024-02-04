<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Edit <?php echo e(Config('constants.EMAIL_TEMPLATES.EMAIL_TEMPLATE_TITLE')); ?> </h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo e(route($model.'.index')); ?>" class="text-muted"><?php echo e(Config('constants.EMAIL_TEMPLATES.EMAIL_TEMPLATES_TITLE')); ?> </a>
						</li>
					</ul>
				</div>
			</div>
			<?php echo $__env->make("admin.elements.quick_links", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<form action="<?php echo e(route($model.'.update',base64_encode($emailTemplate->id))); ?>" method="post" class="mws-form">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				<div class="card card-custom gutter-b">
					<div class="card-body">
						<div class="tab-content">
							<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group">
													<lable>Name</lable><span class="text-danger"> * </span>
													<input type="text" name="name" class="form-control form-control-solid form-control-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($emailTemplate->name ?? ''); ?>">
													<?php if($errors->has('name')): ?>
													<div class="invalid-feedback">
														<?php echo e($errors->first('name')); ?>

													</div>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group">
													<lable>Subject</lable><span class="text-danger"> * </span>
													<input type="text" name="subject" class="form-control form-control-solid form-control-lg <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($emailTemplate->subject ?? ''); ?>">
													<?php if($errors->has('subject')): ?>
													<div class="invalid-feedback">
														<?php echo e($errors->first('subject')); ?>

													</div>
													<?php endif; ?>
												</div>
											</div>
											<div class="col-xl-6" style="display:none;">
												<div class="form-group">
													<lable for="action">Action</lable><span class="text-danger"> * </span>
													<select name="action" class="form-control form-control-solid form-control-lg" id="action">
														<option value=""><?php echo e($emailTemplate->action); ?></option>
													</select>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group">
													<lable for="Constants">Constants</lable><span class="text-danger"> </span>
													<div class="row">
														<div class="col">
															<select name="constants" class="form-control form-control-solid form-control-lg" onchange="constants(1)" id="constants">
																<option value="">Select One</option>
																<?php $__currentLoopData = $optionsvalue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value=""><?php echo e($arr); ?></option>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</select>
														</div>
														<div class="col-auto">
															<a onclick="return InsertHTML(1)" href="javascript:void(0)" class="btn btn-lg btn-success no-ajax pull-right"><i class="icon-white "></i><?php echo e(trans("Insert Variable")); ?> </a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group">
													<div id="kt-ckeditor-1-toolbar1"></div>
													<lable>Email Body </lable><span class="text-danger"> * </span>
													<textarea name="body" id="bodyChange" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('body')); ?>">
													<?php echo e($emailTemplate->body ?? ''); ?> </textarea>
													<?php if($errors->has('body')): ?>
													<div class="invalid-feedback">
														<?php echo e($errors->first('body')); ?>

													</div>
													<?php endif; ?>
												</div>
												<script src="<?php echo e(asset('public/admin/js/ckeditor/ckeditor.js')); ?>"></script>
												<script>
													CKEDITOR.replace(<?php echo 'bodyChange'; ?>, {
														filebrowserUploadUrl: '<?php echo URL()->to('base/uploder'); ?>',
														enterMode: CKEDITOR.ENTER_BR
													});
													CKEDITOR.config.allowedContent = true;
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-between border-top mt-5 pt-10">
							<div>
								<button button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
									Submit
								</button>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type='text/javascript'>
	function InsertHTML(count) {
		var str = document.getElementById('constants_' + count);
		var strUser = str.options[str.selectedIndex].text;

		if (strUser != '') {
			var newStr = '{' + strUser + '}';
			var oEditor = CKEDITOR.instances['body_' + count];
			oEditor.insertHtml(newStr);
		}
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/email-templates/edit.blade.php ENDPATH**/ ?>