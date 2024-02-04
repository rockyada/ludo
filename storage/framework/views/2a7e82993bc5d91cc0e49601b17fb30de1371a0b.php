<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        <?php echo e(Config('constants.BATTLES_DISPUTE.BATTLES_DISPUTE_TITLE')); ?>

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
                                                    <label>Battle Id</label>
                                                    <input type="text" class="form-control" name="battle_id" placeholder="Battle Id" value="<?php echo e($searchVariable['battle_id'] ?? ''); ?>">
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
                                                    <th class="<?php echo e((($sortBy == 'battle_id' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'battle_id' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'battle_id',
                                                    'order' => ($sortBy == 'battle_id' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))); ?>">Battle Id</a>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'entry_fee' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'entry_fee' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'entry_fee',
                                                    'order' => ($sortBy == 'entry_fee' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))); ?>">Entry Fee</a>
                                                    <th class="<?php echo e((($sortBy == 'prize' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'prize' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'prize',
                                                    'order' => ($sortBy == 'prize' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))); ?>">Winning Price</a>
                                                    </th>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'admin_commision' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'admin_commision' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'admin_commision',
                                                    'order' => ($sortBy == 'admin_commision' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))); ?>">Admin Commission</a>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'LOBBY_ID' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'LOBBY_ID' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'LOBBY_ID',
                                                    'order' => ($sortBy == 'LOBBY_ID' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))); ?>">Room Code</a>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'game_name' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'game_name' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'game_name',
                                                    'order' => ($sortBy == 'game_name' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))); ?>">Ludo Type</a>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'created_at' && $order == 'des') ? 'sorting_desc' : (($sortBy == 'created_at' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                    <a href="<?php echo e(route($model.'.index',array( 'sortBy' => 'created_at',
                                                    'order' => ($sortBy == 'created_at' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))); ?>">Added On</a>
                                                    </th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!$results->isEmpty()): ?>
                                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><img width="20px" src="<?php echo e(Config('constants.WEBSITE_URL').'public/admin/img/battle.png'); ?>">&nbsp;&nbsp; <?php echo e($result->battle_id ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><img width="20px" src="<?php echo e(Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'); ?>">&nbsp;&nbsp;₹ <?php echo e($result->entry_fee ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><img width="20px" src="<?php echo e(Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'); ?>">&nbsp;&nbsp;₹ <?php echo e($result->prize ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                        <img width="20px" src="<?php echo e(Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'); ?>">&nbsp;&nbsp;₹ <?php echo e($result->admin_commision ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><?php echo e($result->LOBBY_ID ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><?php echo e($result->game_name ?? ''); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            <?php echo e(date(config("Reading.date_format")." h:i:s" ,strtotime($result->created_at))); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php if($result->creator_result=='cancel' && $result->joiner_result=='cancel'): ?>
                                                          <a href="<?php echo e(route($model.'.show',base64_encode($result->id))); ?>" class="btn btn-warning">Cancelled</a>
                                                          <?php elseif($result->creator_result=='lost' && $result->joiner_result=='lost'): ?>
                                                          <a href="<?php echo e(route($model.'.battlePending',base64_encode($result->id))); ?>" class="btn btn-danger">Pending</a>
                                                           <?php elseif($result->creator_result=='lost' && $result->joiner_result=='cancel'): ?>
                                                          <a href="<?php echo e(route($model.'.battlePending',base64_encode($result->id))); ?>" class="btn btn-danger">Pending</a>
                                                          <?php elseif($result->joiner_result=='win' && $result->creator_result=='cancel'): ?>
                                                          <a href="<?php echo e(route($model.'.battlePending',base64_encode($result->id))); ?>" class="btn btn-danger">Pending</a>
                                                           <?php elseif($result->joiner_result=='lost' && $result->creator_result=='cancel'): ?>
                                                          <a href="<?php echo e(route($model.'.battlePending',base64_encode($result->id))); ?>" class="btn btn-danger">Pending</a>
                                                          <?php elseif($result->creator_result=='win' && $result->joiner_result=='cancel'): ?>
                                                          <a href="<?php echo e(route($model.'.battlePending',base64_encode($result->id))); ?>" class="btn btn-danger">Pending</a>
                                                          <?php elseif($result->creator_result != $result->joiner_result): ?>
                                                          <a href="<?php echo e(route($model.'.show',base64_encode($result->id))); ?>" class="btn btn-success">Approved</a>
                                                          <?php elseif($result->creator_result=='win' && $result->joiner_result=='win'): ?>
                                                          <a href="<?php echo e(route($model.'.battlePending',base64_encode($result->id))); ?>" class="btn btn-danger">Pending</a>
                                                        <?php endif; ?>
                                                        <a href="<?php echo e(route($model.'.show',base64_encode($result->id))); ?>" class="btn btn-icon btn-light btn-hover-primary btn-sm" data-toggle="tooltip" data-placement="top" data-container="body" data-boundary="window" title="" data-original-title="View">
                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M12.8434797,16 L11.1565203,16 L10.9852159,16.6393167 C10.3352654,19.064965 7.84199997,20.5044524 5.41635172,19.8545019 C2.99070348,19.2045514 1.55121603,16.711286 2.20116652,14.2856378 L3.92086709,7.86762789 C4.57081758,5.44197964 7.06408298,4.00249219 9.48973122,4.65244268 C10.5421727,4.93444352 11.4089671,5.56345262 12,6.38338695 C12.5910329,5.56345262 13.4578273,4.93444352 14.5102688,4.65244268 C16.935917,4.00249219 19.4291824,5.44197964 20.0791329,7.86762789 L21.7988335,14.2856378 C22.448784,16.711286 21.0092965,19.2045514 18.5836483,19.8545019 C16.158,20.5044524 13.6647346,19.064965 13.0147841,16.6393167 L12.8434797,16 Z M17.4563502,18.1051865 C18.9630797,18.1051865 20.1845253,16.8377967 20.1845253,15.2743923 C20.1845253,13.7109878 18.9630797,12.4435981 17.4563502,12.4435981 C15.9496207,12.4435981 14.7281751,13.7109878 14.7281751,15.2743923 C14.7281751,16.8377967 15.9496207,18.1051865 17.4563502,18.1051865 Z M6.54364977,18.1051865 C8.05037928,18.1051865 9.27182488,16.8377967 9.27182488,15.2743923 C9.27182488,13.7109878 8.05037928,12.4435981 6.54364977,12.4435981 C5.03692026,12.4435981 3.81547465,13.7109878 3.81547465,15.2743923 C3.81547465,16.8377967 5.03692026,18.1051865 6.54364977,18.1051865 Z" fill="#000000" />
                                                                    </g>
                                                                </svg>
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
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/battles-dispute/index.blade.php ENDPATH**/ ?>