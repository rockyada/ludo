<?php $__env->startSection('content'); ?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
   <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
      <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
         <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
               <h5 class="text-dark font-weight-bold my-1 mr-5">
                  View <?php echo e(Config('constants.PLAYERS.PLAYERS_TITLE')); ?>

               </h5>
               <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                  <li class="breadcrumb-item">
                     <a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="<?php echo e(route($model.'.index')); ?>" class="text-muted">    <?php echo e(Config('constants.PLAYERS.PLAYERS_TITLES')); ?></a>
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
                           <?php echo e(Config('constants.PLAYERS.PLAYERS_TITLE')); ?> Information
                           </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                           <span class="nav-text">
                           <?php echo e(Config('constants.PLAYERS.PLAYERS_TITLE')); ?> KYC Documents Details
                           </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_3">
                           <span class="nav-text">
                           <?php echo e(Config('constants.PLAYERS.PLAYERS_TITLE')); ?> Bank Account Details
                           </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_4">
                           <span class="nav-text">
                           <?php echo e(Config('constants.PLAYERS.PLAYERS_TITLE')); ?> Other Details
                           </span>
                        </a>
                     </li>
               </div>
            </div>
            <div class="card-body px-0">
               <div class="tab-content px-10">
                  <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">User Id:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->vplay_id ?? ''); ?></span>
                        </div>
                     </div>

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label"> Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e(ucwords($playerInfo->name ?? '')); ?></span>
                        </div>
                     </div>
                     
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Mobile:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->mobile ?? ''); ?></span>
                        </div>
                     </div>

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Wallet Balance:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->wallet ?? ''); ?></span>
                        </div>
                     </div>
                   
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Wallet Reffer:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->wallet_reffer ?? ''); ?></span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Referral Code:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->referral_code ?? ''); ?></span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Total Win:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><img width="30px" src="<?php echo e(Config('constants.WEBSITE_URL').'public/admin/img/win.png'); ?>">&nbsp;&nbsp;<?php echo e($playerInfo->total_win ?? ''); ?></span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Total Loss:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><img width="30px" src="<?php echo e(Config('constants.WEBSITE_URL').'public/admin/img/lost.png'); ?>">&nbsp;&nbsp;<?php echo e($playerInfo->total_lost ?? ''); ?></span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Joined At:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">   <?php echo e(date(config("Reading.date_format"),strtotime($playerInfo->created_at))); ?> </span>
                        </div>
                     </div>
                    
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Status:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              <?php if($playerInfo->is_blocked == 0): ?>
                              <span class="label label-lg label-light-success label-inline">Activated</span>
                              <?php else: ?>
                              <span class="label label-lg label-light-danger label-inline">Block</span>
                              <?php endif; ?>
                           </span>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Document Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_kyc_details->DOCUMENT_NAME ?? ''); ?></span>
                        </div>
                     </div>

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label"> Document Number:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_kyc_details->DOCUMENT_NUMBER ?? ''); ?></span>
                        </div>
                     </div>
                     
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">First Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_kyc_details->DOCUMENT_FIRST_NAME ?? ''); ?></span>
                        </div>
                     </div>

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Last Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_kyc_details->DOCUMENT_LAST_NAME ?? ''); ?></span>
                        </div>
                     </div>
                   
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Date Of Birth:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              <?php echo e(date(config("Reading.date_format"),strtotime(@$playerInfo->users_kyc_details->DOCUMENT_DOB ?? ''))); ?>

                           <span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">State:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_kyc_details->DOCUMENT_STATE ?? ''); ?></span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Front Side Image:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              <?php if(@$playerInfo->users_kyc_details->DOCUMENT_FRONT_IMAGE): ?>
                              <div class="text-dark-75 mb-1 font-size-lg">
                                 <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo e(Config('constants.USER_KYC_IMAGE_PATH').$playerInfo->users_kyc_details->DOCUMENT_FRONT_IMAGE ?? ''); ?>"><img height="50" width="50" src="<?php echo e(Config('constants.USER_KYC_IMAGE_PATH').$playerInfo->users_kyc_details->DOCUMENT_FRONT_IMAGE ?? ''); ?>"></a>
                             </div>
                             <?php endif; ?>
                           </span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Back Side Image:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              <?php if(@$playerInfo->users_kyc_details->DOCUMENT_BACK_IMAGE): ?>
                              <div class="text-dark-75 mb-1 font-size-lg">
                                 <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo e(Config('constants.USER_KYC_IMAGE_PATH').$playerInfo->users_kyc_details->DOCUMENT_BACK_IMAGE ?? ''); ?>"><img height="50" width="50" src="<?php echo e(Config('constants.USER_KYC_IMAGE_PATH').$playerInfo->users_kyc_details->DOCUMENT_BACK_IMAGE ?? ''); ?>"></a>
                             </div>
                             <?php endif; ?>
                           </span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Uploads At:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"> <?php echo e(date(config("Reading.date_format"),strtotime(@$playerInfo->users_kyc_details->created_at ?? ''))); ?> </span>
                        </div>
                     </div>
                    
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Verify Document status:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              <?php if(@$playerInfo->users_kyc_details->verify_status == 1): ?>
                              <span class="label label-lg label-light-success label-inline">VERIFIED</span>
                              <?php else: ?>
                              <span class="label label-lg label-light-danger label-inline">NOT VERIFIED</span>
                              <?php endif; ?>
                           </span>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">UPI - Account Holder Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_bank_details->upi_account_holder_name ?? ''); ?></span>
                        </div>
                     </div>

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label"> UPI - Id:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_bank_details->upi_id ?? ''); ?></span>
                        </div>
                     </div>
                     
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Bank Account - Holder Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_bank_details->bank_account_holder_name ?? ''); ?></span>
                        </div>
                     </div>

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Bank Account Number:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_bank_details->bank_account_number ?? ''); ?></span>
                        </div>
                     </div>
                   
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Bank Account - IFSC Code:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->users_bank_details->ifsc_code ?? ''); ?></span>
                        </div>
                     </div>
                     
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Created at:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">   <?php echo e(date(config("Reading.date_format"),strtotime(@$playerInfo->users_bank_details->created_at))); ?> </span>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
                     <form action="<?php echo e(route($model.'.amountAdd',[base64_encode($playerInfo->id)])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Email:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->email ?? ''); ?></span>
                           </div>
                        </div>

                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Wallet Balance:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder">
                                 <input type="number" name="wallet" value="<?php echo e($playerInfo->wallet ?? '0'); ?>">
                              </span>
                           </div>
                        </div>
                     
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Refferal Code:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->referral_code ?? ''); ?></span>
                           </div>
                        </div>
                      
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Reffered By:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder"><?php echo e($playerInfo->reffered_by ?? ''); ?></span>
                           </div>
                        </div>
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label"></label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder">
                                 <button class="btn btn-success">UPDATE NOW</button>
                              </span>
                           </div>
                        </div>
                     </form>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/players/view.blade.php ENDPATH**/ ?>