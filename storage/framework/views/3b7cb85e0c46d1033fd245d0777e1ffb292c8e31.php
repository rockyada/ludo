<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        View <?php echo e(Config('constants.PRODUCT.PRODUCT_TITLE')); ?>

                    </h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route($model.'.index')); ?>" class="text-muted"> <?php echo e(Config('constants.PRODUCT.PRODUCTS_TITLE')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php echo $__env->make("admin.elements.quick_links", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <div class="card card-custom gutter-b">
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active hide_me" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
                                    <span class="nav-text">
                                        <?php echo e(Config('constants.PRODUCT.PRODUCT_TITLE')); ?> Information
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  hide_me" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                                    <span class="nav-text">
                                        <?php echo e(Config('constants.PRODUCT.PRODUCT_TITLE')); ?> Images
                                    </span>
                                </a>
                            </li>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content px-10">
                        <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Product Image:</label>
                                <div class="col-8">
                                    <div class="text-dark-75 mb-1 font-size-lg">
                                        <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo e($productDetails->image); ?>"><img height="50" width="50" src="<?php echo e($productDetails->image); ?>" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Product Name:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder"><?php echo e(ucwords($productDetails->name ?? '')); ?></span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label"> Platform Name:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">
                                        <?php $stringWithSpaces = str_replace('_', ' ', $productDetails->platform_name);
                                        // Capitalize the first letter of each word
                                        $convertedString = ucwords($stringWithSpaces); ?>
                                        <?php echo e($convertedString); ?></span>


                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Price:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder"> <?php echo e($productDetails->price_currency); ?> <?php echo e($productDetails->price? number_format($productDetails->price,2,'.', '') : ""); ?></span>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Added Stars:</label>
                                <div class="col-8">
                                    <?php
                                    $rating = $productDetails->ratingCount; // Your rating value (e.g., 3 out of 5)
                                    $maxRating = 5; // Maximum rating (number of stars)
                                    ?>
                                    <div class="star-rating">
                                        <?php for($i = 1; $i <= $maxRating; $i++): ?> <?php if($i <=$rating): ?> <svg width="16" height="16" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z" fill="#FFDC64"></path>
                                            </svg>
                                            <?php else: ?>
                                            <svg width="16" height="16" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z" fill="none" stroke="#FFDC64"></path>
                                            </svg>
                                            <?php endif; ?>
                                            <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Registered On:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder"> <?php echo e(date(config("Reading.date_format"),strtotime($productDetails->created_at))); ?> </span>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Status:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">
                                        <?php if($productDetails->is_active == 1): ?>
                                        <span class="label label-lg label-light-success label-inline">Activated</span>
                                        <?php else: ?>
                                        <span class="label label-lg label-light-danger label-inline">Deactivated</span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="kt_apps_contacts_view_tab_2" role="tabpanel">
                            <div class="form-group row my-2">

                                <div class="col-12">
                                    <div class="container">
                                        <div class="row">
                                            <?php $__currentLoopData = $product_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                                <div class="text-dark-75 mb-1 font-size-lg">
                                                    <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo e($image['system_thumbnail_image_path']?$image['system_thumbnail_image_path']:$image['origin_image']); ?>">
                                                        <img src="<?php echo e($image['system_thumbnail_image_path']?$image['system_thumbnail_image_path']:$image['origin_image']); ?>" class="img-fluid img-thumbnail" alt="Product Image" height="200" width="200">
                                                    </a>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/admin/product/view.blade.php ENDPATH**/ ?>