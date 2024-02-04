<?php $__env->startSection('title'); ?> <?php echo e($data->title ?? ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbBlock">
    <div class="container">
        <div class="breadcrumbRow">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('web.index')); ?>"><?php echo e(trans('messages.Home')); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($data->title ?? ''); ?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<section class="cms-page">
    <div class="container">
        <?php echo $data->body ?? ''; ?>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/pages/services-and-fees.blade.php ENDPATH**/ ?>