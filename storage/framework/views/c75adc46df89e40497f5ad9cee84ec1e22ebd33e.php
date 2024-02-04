<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        <?php echo e(Config('constants.APPROVED_KYC.APPROVED_KYC_TITLES')); ?>

                    </h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php echo $__env->make("admin.elements.quick_links", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
   
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="<?php echo e(route($model.'.index')); ?>" method="get" class="kt-form kt-form--fit mb-0" autocomplete="off">
                <input type="hidden" name="display">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-custom card-stretch card-shadowless">
                            <div class="card-header">
                                <div class="card-title">

                                </div>
                                <div class="card-toolbar">
                                    <a href="javascript:void(0);" class="btn btn-primary dropdown-toggle mr-2" data-toggle="collapse" data-target="#collapseOne6">
                                        Search
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                                    <div id="collapseOne6" class="collapse <?php echo !empty($searchVariable) ? 'show' : ''; ?>" data-parent="#accordionExample6">
                                        <div>
                                            <div class="row mb-6">
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Order Id</label>
                                                    <input type="text" class="form-control" name="order_id" placeholder="Order Id" value="<?php echo e($searchVariable['order_id'] ?? ''); ?>">
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>User Id</label>
                                                    <input type="text" class="form-control" name="vplay_id" placeholder="User Id" value="<?php echo e($searchVariable['vplay_id'] ?? ''); ?>">
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Mobile</label>
                                                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo e($searchVariable['mobile'] ?? ''); ?>">
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Date From</label>
                                                    <div class="input-group date" id="datepickerfrom" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" name="date_from" placeholder="Date From" data-target="#datepickerfrom" data-toggle="datetimepicker" value="<?php echo e($searchVariable['date_from'] ?? ''); ?>">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="ki ki-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Date To</label>
                                                    <div class="input-group date" id="datepickerto" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" name="date_to" placeholder="Date to" data-target="#datepickerto" data-toggle="datetimepicker" value="<?php echo e($searchVariable['date_to'] ?? ''); ?>">

                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="ki ki-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-8">
                                                <div class="col-lg-12">
                                                    <button class="btn btn-primary btn-primary--icon" id="kt_search">
                                                        <span>
                                                            <i class="la la-search"></i>
                                                            <span>Search</span>
                                                        </span>
                                                    </button>
                                                    &nbsp;&nbsp;
                                                    <a href='<?php echo e(route("$model.index")); ?>' class="btn btn-secondary btn-secondary--icon">
                                                        <span>
                                                            <i class="la la-close"></i>
                                                            <span>Clear Search</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataTables_wrapper ">
                                    <div class="table-responsive">
                                        <table class="table dataTable table-head-custom table-head-bg table-borderless table-vertical-center" id="taskTable">
                                            <thead>
                                                <tr class="text-uppercase">
                                                    <th>User Id</th>                                                  <th class="<?php echo e((($sortBy == 'DOCUMENT_NAME' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'DOCUMENT_NAME' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'DOCUMENT_NAME',
                                                    'order' => ($sortBy == 'DOCUMENT_NAME' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))); ?>">Document Name</a>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'DOCUMENT_NUMBER' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'DOCUMENT_NUMBER' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'DOCUMENT_NUMBER',
                                                    'order' => ($sortBy == 'DOCUMENT_NUMBER' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))); ?>">Document Number</a>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'created_at' && $order == 'des') ? 'sorting_desc' : (($sortBy == 'created_at' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'created_at',
                                                    'order' => ($sortBy == 'created_at' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))); ?>">Added On</a>
                                                    </th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!$results->isEmpty()): ?>
                                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            <a href="<?php echo e(route('players.show',base64_encode($result->user_id))); ?>"><?php echo e($result->vplay_id ?? ''); ?></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><?php echo e($result->DOCUMENT_NAME ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><?php echo e($result->DOCUMENT_NUMBER ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            <?php echo e(date(config("Reading.date_format"),strtotime($result->created_at))); ?>

                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-2">
                                                        <a href="<?php echo e(route($model.'.show',base64_encode($result->id))); ?>">
                                                            <span class="label label-lg label-light-danger label-inline">
                                                                Reject
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                <tr>
                                                    <td colspan="6" style="text-align:center;"> <?php echo e(trans("Record not found.")); ?></td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php echo $__env->make('pagination.default', ['results' => $results], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/kyc-approved/index.blade.php ENDPATH**/ ?>