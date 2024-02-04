<?php $i = 1; ?>

<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Edit  <?php echo e(Config('constants.SERVICE_FLOW.SERVICE_FLOW_TITLE')); ?> </h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route($model.'.index')); ?>" class="text-muted"> <?php echo e(Config('constants.SERVICE_FLOW.SERVICE_FLOW_TITLES')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php echo $__env->make("admin.elements.quick_links", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <form action="<?php echo e(route($model.'.update',base64_encode($serviceDetails->id))); ?>" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <lable name="image">Image</lable><span class="text-danger"> * </span>
                                    <input type="file" name="image" accept="image/*" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('image')); ?>">
                                    <?php if($errors->has('image')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('image')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <div class="mt-5">
                                    <?php if(!empty($serviceDetails->image)): ?>
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo e(url(Config('constants.SERVICE_FLOW_IMAGE_ROOT_PATH') . $serviceDetails->image)); ?>">
                                        <img width="100px" height="80" src="<?php echo e(url(Config('constants.SERVICE_FLOW_IMAGE_ROOT_PATH') . $serviceDetails->image)); ?>" />
                                    </a>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-toolbar border-top">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <?php if(!empty($languages)): ?>
                                <?php $i = 1; ?>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(($i==$language_code)?'active':''); ?>" data-toggle="tab" href="#<?php echo e($language->title); ?>">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="<?php echo e(url (Config::get('constants.LANGUAGE_IMAGE_PATH').$language->image)); ?>" alt="">
                                        </span>
                                        <span class="nav-text"><?php echo e($language->title); ?></span>
                                    </a>
                                </li>
                                <?php $i++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <?php if(!empty($languages)): ?>
                            <?php $i = 1; ?>
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane fade <?php echo e(($i==$language_code)?'show active':''); ?>" id="<?php echo e($language->title); ?>" role="tabpanel" aria-labelledby="<?php echo e($language->title); ?>">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <?php if($i == 1): ?>
                                                    <lable for="<?php echo e($language->id); ?>.title">Title</lable><span class="text-danger"> * </span>
                                                    <input type="text" name="data[<?php echo e($language->id); ?>][title]" class="form-control form-control-solid form-control-lg <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($multiLanguage[$language->id]['title'] ?? old('title')); ?>">
                                                    <?php if($errors->has('title')): ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($errors->first('title')); ?>

                                                    </div>
                                                    <?php endif; ?>
                                                    <?php else: ?>
                                                    <lable for="<?php echo e($language->id); ?>.title">Title</lable><span class="text-danger"> </span>
                                                    <input type="text" name="data[<?php echo e($language->id); ?>][title]" class="form-control form-control-solid form-control-lg" value="<?php echo e($multiLanguage[$language->id]['title'] ?? old('question')); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <div id="kt-ckeditor-1-toolbar<?php echo e($language->id); ?>"></div>
                                                    <?php if($i == 1): ?>
                                                    <lable>Description </lable><span class="text-danger"> * </span>
                                                    <textarea id="body_<?php echo e($language->id); ?>" name="data[<?php echo e($language->id); ?>][description]" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('description')); ?>">
                                                    <?php echo e($multiLanguage[$language->id]['description'] ?? old('description')); ?> </textarea>
                                                    <?php if($errors->has('description')): ?>
                                                    <div class="alert invalid-feedback admin_login_alert">
                                                        <?php echo e($errors->first('description')); ?>

                                                    </div>
                                                    <?php endif; ?>
                                                    <?php else: ?>
                                                    <lable>Description </lable>
                                                    <textarea name="data[<?php echo e($language->id); ?>][description]" id="body_<?php echo e($language->id); ?>" class="form-control form-control-solid form-control-lg">
                                                    <?php echo e($multiLanguage[$language->id]['description'] ?? old('description')); ?></textarea>
                                                    <?php endif; ?>
                                                </div>
                                                <script src="<?php echo e(asset('/public/js/ckeditor/ckeditor.js')); ?>"></script>
                                                <script>
                                                    CKEDITOR.replace(<?php echo 'body_' . $language->id; ?>, {
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
                            <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
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
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/admin/service-flow/edit.blade.php ENDPATH**/ ?>