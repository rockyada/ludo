<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
   <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
      <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
         <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
               <h5 class="text-dark font-weight-bold my-1 mr-5">
                  View    <?php echo e(Config('constants.SERVICE_FLOW.SERVICE_FLOW_TITLE')); ?>

               </h5>
               <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                  <li class="breadcrumb-item">
                     <a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="<?php echo e(route($model.'.index')); ?>" class="text-muted">    <?php echo e(Config('constants.SERVICE_FLOW.SERVICE_FLOW_TITLES')); ?></a>
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
                           <?php echo e(Config('constants.SERVICE_FLOW.SERVICE_FLOW_TITLE')); ?> Information
                           </span>
                        </a>
                     </li>
               </div>
            </div>
            <div class="card-body px-0">
               <div class="tab-content px-10">

                  <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                    

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label"> Title:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e(ucwords($ServiceDetails->title ?? '')); ?></span>
                        </div>
                     </div>
                     
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label"> Description:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e(ucwords($ServiceDetails->description ?? '')); ?></span>
                        </div>
                     </div>
                     
                     
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Registered On:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">   <?php echo e(date(config("Reading.date_format"),strtotime($ServiceDetails->created_at))); ?> </span>
                        </div>
                     </div>
                    
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Status:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              <?php if($ServiceDetails->is_active == 1): ?>
                              <span class="label label-lg label-light-success label-inline">Activated</span>
                              <?php else: ?>
                              <span class="label label-lg label-light-danger label-inline">Deactivated</span>
                              <?php endif; ?>
                           </span>
                        </div>
                     </div>


                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Image:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              <?php if(!empty($ServiceDetails->image)): ?>
                              <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo e(url(Config('constants.SERVICE_FLOW_IMAGE_ROOT_PATH') . $ServiceDetails->image)); ?>">
                                 <img width="50px" height="50" src="<?php echo e(url(Config('constants.SERVICE_FLOW_IMAGE_ROOT_PATH') . $ServiceDetails->image)); ?>" />
                             </a>                              <?php endif; ?>
                                 </span>
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
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/admin/service-flow/view.blade.php ENDPATH**/ ?>