<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        <?php echo e(Config('constants.DESIGNATION.DESIGNATIONS_TITLE')); ?>

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
                                    <a href="<?php echo e(route($model.'.add')); ?>" class="btn btn-primary"> <?php echo e(trans("Add New ")); ?> <?php echo e(Config('constants.DESIGNATION.DESIGNATION_TITLE')); ?> </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                                    <div id="collapseOne6" class="collapse <?php echo !empty($searchVariable) ? 'show' : ''; ?>" data-parent="#accordionExample6">
                                        <div>
                                            <div class="row mb-6">
                                                <div class="col-lg-3  mb-lg-5 mb-6">
                                                    <label>Status</label>
                                                    <select name="is_active" class="form-control select2init" value="<?php echo e($searchVariable['is_active'] ?? ''); ?>">
                                                        <option value="">All</option>
                                                        <option value="1">Activate</option>
                                                        <option value="0">Deactivate</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder=" Name" value="<?php echo e($searchVariable['name'] ?? ''); ?>">
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
                                                    <a href="<?php echo e(route($model.'.index')); ?>" class="btn btn-secondary btn-secondary--icon">
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
                                                    <th class="<?php echo e((($sortBy == 'name' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'name' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                        <a href="<?php echo e(route($model.'.index',array(	'sortBy' => 'name',
							                      'order' => ($sortBy == 'name' && $order == 'desc') ? 'asc' : 'desc',	
				                               	$query_string))); ?>"> Name</a>
                                                    </th>
                                                    <th class="<?php echo e((($sortBy == 'created_at' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'created_at' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                        <a href="<?php echo e(route($model.'.index',array(	'sortBy' => 'created_at',
													'order' => ($sortBy == 'created_at' && $order == 'desc') ? 'asc' : 'desc',	
													$query_string))); ?>">Added On</a>
                                                    </th>

                                                    <th class="<?php echo e((($sortBy == 'is_active' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'is_active' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
                                                        <a href="<?php echo e(route($model.'.index',array(	'sortBy' => 'is_active',
													'order' => ($sortBy == 'is_active' && $order == 'desc') ? 'asc' : 'desc',	
													$query_string))); ?>">Status</a>
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
                                                            <?php echo e($result->name); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            <?php echo e(date(config("Reading.date_format"),strtotime($result->created_at))); ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php if($result->is_active == 1): ?>
                                                        <span class="label label-lg label-light-success label-inline">Activated</span>
                                                        <?php else: ?>
                                                        <span class="label label-lg label-light-danger label-inline">Deactivated</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-right pr-2">
                                                        <?php if($result->is_active == 1): ?>
                                                        <a title="Click To Deactivate" href='<?php echo e(route($model.".status",array($result->id,1))); ?>' class="btn btn-icon btn-light btn-hover-danger btn-sm status_any_item" data-toggle="tooltip" data-placement="top" data-container="body" data-boundary="window" data-original-title="Deactivate">
                                                            <span class="svg-icon svg-icon-md svg-icon-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                                            <rect x="0" y="7" width="16" height="2" rx="1" />
                                                                            <rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) " x="0" y="7" width="16" height="2" rx="1" />
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <?php else: ?>
                                                        <a title="Click To Activate" href='<?php echo e(route($model.".status",array($result->id,0))); ?>' class="btn btn-icon btn-light btn-hover-success btn-sm status_any_item" data-toggle="tooltip" data-placement="top" data-container="body" data-boundary="window" data-original-title="Activate">
                                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) " />
                                                                        <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) " />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <?php endif; ?>
                                                        <a href="<?php echo e(route($model.'.edit',['endesid'=>base64_encode($result->id)])); ?>" class="btn btn-icon btn-light btn-hover-primary btn-sm" data-toggle="tooltip" data-placement="top" data-container="body" data-boundary="window" title="" data-original-title="Edit">
                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                                                        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="<?php echo e(route($model.'.delete',['endesid'=>base64_encode($result->id)])); ?>" class="btn btn-icon btn-light btn-hover-danger btn-sm confirmDelete" data-toggle="tooltip" data-placement="top" data-container="body" data-boundary="window" title="" data-original-title="Delete">
                                                            <span class="svg-icon svg-icon-md svg-icon-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
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
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/designations/index.blade.php ENDPATH**/ ?>