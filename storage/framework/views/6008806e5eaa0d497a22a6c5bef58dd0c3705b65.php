<?php $__env->startSection('title'); ?> <?php echo e(trans('messages.Login_&_Profile')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbBlock">
    <div class="container">
       <div class="breadcrumbRow">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><?php echo e(trans('messages.Home')); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('messages.Login_&_Profile')); ?></li>
                </ol>
            </nav>                
       </div>
    </div>
</div>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="pageTopTitle col-12">
                <h2 class="RightBlockTitle"><?php echo e(trans('messages.Login_&_Profile')); ?></h2>
            </div>
            <div class="col-md-12 col-lg-3 col-xl-3 theia-sticky">
                <?php echo $__env->make('frontend.elements.side-setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-12 col-lg-9 col-xl-9  w100MD" id="myProfile">
                <div class="dashboardRightBlock">
                    <div class="personal_info_page">
                        <h2 class="profile_details_title"><?php echo e(trans('messages.Profile_details')); ?></h2>
                        <form action="<?php echo e(route('users.prfileRequest')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="upload_img_block">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url(<?php echo e(@UsersData()->image ?  UsersData()->image : asset('public/img/user.png')); ?>);">
                                        </div>
                                    </div>
                                    <div class="upload_btn_label">
                                        <label for="imageUpload">
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="22" cy="22" r="22" fill="#009999"/>
                                                <path d="M30.4891 16.0218H28.2978L27.088 14.1957C26.6315 13.511 25.8326 13.1001 25.0109 13.1001H19.9891C19.1674 13.1001 18.3685 13.511 17.912 14.1957L16.7022 16.0218H14.5109C13.1185 16.0218 12 17.1403 12 18.5327V27.3892C12 28.7816 13.1185 29.9001 14.5109 29.9001H30.4891C31.8815 29.9001 33 28.7816 33 27.3892V18.5327C33 17.1403 31.8815 16.0218 30.4891 16.0218ZM22.5 27.8457C19.3728 27.8457 16.8391 25.3121 16.8391 22.1849C16.8391 19.0577 19.3728 16.5468 22.5 16.5468C25.6272 16.5468 28.1609 19.0805 28.1609 22.2077C28.1609 25.3121 25.6272 27.8457 22.5 27.8457ZM30.1696 19.5599C30.1467 19.5599 30.1239 19.5599 30.0783 19.5599H29.1652C28.7543 19.5371 28.4348 19.1947 28.4576 18.7838C28.4804 18.3957 28.7772 18.099 29.1652 18.0762H30.0783C30.4891 18.0534 30.8315 18.3729 30.8543 18.7838C30.8772 19.1947 30.5804 19.5371 30.1696 19.5599Z" fill="white"/>
                                                <path d="M22.4996 19.0576C20.7648 19.0576 19.3496 20.4728 19.3496 22.2076C19.3496 23.9424 20.7648 25.3348 22.4996 25.3348C24.2344 25.3348 25.6496 23.9196 25.6496 22.1848C25.6496 20.45 24.2344 19.0576 22.4996 19.0576Z" fill="white"/>
                                                </svg>
                                                
                                           </label>
                                    </div>
                                </div>
                            </div>
                            <div class="profile_information_banner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="form-label"><?php echo e(trans('messages.First_Name')); ?><span>(<?php echo e(trans('messages.as_for_Postal_Delivery_Service')); ?>)</span></label>
                                            <input type="text" name="first_name" class="form-control" value="<?php echo e(usersData()->first_name ?? ''); ?>" placeholder="<?php echo e(trans('messages.Enter_First_Name')); ?>">
                                            <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="form-label"><?php echo e(trans('messages.Last_Name')); ?></label>
                                            <input type="text" name="last_name" class="form-control" value="<?php echo e(usersData()->last_name ?? ''); ?>" placeholder="<?php echo e(trans('messages.Enter_Last_Name')); ?>">
                                            <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="form-label"><?php echo e(trans('messages.Company_Name')); ?> <span>(<?php echo e(trans('messages.for_B2B_users')); ?>)</span></label>
                                            <input type="text" name="company_name" class="form-control" value="<?php echo e(usersData()->company_name ?? ''); ?>" placeholder="<?php echo e(trans('messages.Enter_Company_Name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="form-label"><?php echo e(trans('messages.Email')); ?></label>
                                            <input type="text" name="email" placeholder="<?php echo e(trans('messages.Enter_Email')); ?>" value="<?php echo e(usersData()->email ?? ''); ?>" class="form-control" >
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <?php $phone = explode(',',usersData()->phone_number);  ?>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="form-label"><?php echo e(trans('messages.Phone')); ?> <span>(<?php echo e(trans('messages.as_for_Postal_Delivery_Service')); ?>)</span> </label>
                                            <input type="hidden" value="<?php echo e(@$phone[0] ?? '+65'); ?>"
                                            name="phone_number_prefix" id="phone_number_prefix">
                                            <input type="hidden" value="<?php echo e(usersData()->phone_number_country_code ?? 'SG'); ?>"
                                                name="phone_number_country_code" id="phone_number_country_code">
                                            <input type="text" name="phone" id="phone" placeholder="<?php echo e(trans('messages.Enter_Phone')); ?>" onKeyPress="if(this.value.length==10) return false;" min="0" class="form-control" value="<?php echo e(@$phone[1] ?? ''); ?>">
                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label"><?php echo e(trans('messages.Country')); ?></label>
                                            <select id="country" name="country" class="form-select">
                                                <option value=""><?php echo e(trans('messages.Select_Country')); ?></option>
                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countrie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option data-phonecode="<?php echo e($countrie->phonecode ?? ''); ?>" data-iso="<?php echo e($countrie->iso ?? ''); ?>" value="<?php echo e($countrie->id ?? ''); ?>" <?php echo e(usersData()->country_id == $countrie->id ? 'selected' : ''); ?>><?php echo e($countrie->nicename ?? ''); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group ">
                                            <label class="form-label"><?php echo e(trans('messages.Birthday')); ?></label>
                                            <div class="input_icon_box">
                                                <input type="text" name="birthday" id="datepicker" placeholder="<?php echo e(trans('messages.Enter_Birthday_Date')); ?>" value="<?php echo e(usersData()->birthday ?? ''); ?>" class="form-control" readonly>
                                                <span class="input_right_icon">
                                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22.6362 1.5293H20.3421V3.82341C20.3421 4.28224 19.9597 4.58812 19.5774 4.58812C19.195 4.58812 18.8127 4.28224 18.8127 3.82341V1.5293H6.57739V3.82341C6.57739 4.28224 6.19504 4.58812 5.81268 4.58812C5.43033 4.58812 5.04798 4.28224 5.04798 3.82341V1.5293H2.75386C1.6068 1.5293 0.765625 2.52341 0.765625 3.82341V6.57636H25.2362V3.82341C25.2362 2.52341 23.8597 1.5293 22.6362 1.5293ZM0.765625 8.18224V22.1764C0.765625 23.5528 1.6068 24.4705 2.83033 24.4705H22.7127C23.9362 24.4705 25.3127 23.4764 25.3127 22.1764V8.18224H0.765625ZM7.57151 21.0293H5.73621C5.43033 21.0293 5.12445 20.7999 5.12445 20.4175V18.5058C5.12445 18.1999 5.35386 17.894 5.73621 17.894H7.64798C7.95386 17.894 8.25974 18.1234 8.25974 18.5058V20.4175C8.18327 20.7999 7.95386 21.0293 7.57151 21.0293ZM7.57151 14.1469H5.73621C5.43033 14.1469 5.12445 13.9175 5.12445 13.5352V11.6234C5.12445 11.3175 5.35386 11.0117 5.73621 11.0117H7.64798C7.95386 11.0117 8.25974 11.2411 8.25974 11.6234V13.5352C8.18327 13.9175 7.95386 14.1469 7.57151 14.1469ZM13.6892 21.0293H11.7774C11.4715 21.0293 11.1656 20.7999 11.1656 20.4175V18.5058C11.1656 18.1999 11.395 17.894 11.7774 17.894H13.6892C13.995 17.894 14.3009 18.1234 14.3009 18.5058V20.4175C14.3009 20.7999 14.0715 21.0293 13.6892 21.0293ZM13.6892 14.1469H11.7774C11.4715 14.1469 11.1656 13.9175 11.1656 13.5352V11.6234C11.1656 11.3175 11.395 11.0117 11.7774 11.0117H13.6892C13.995 11.0117 14.3009 11.2411 14.3009 11.6234V13.5352C14.3009 13.9175 14.0715 14.1469 13.6892 14.1469ZM19.8068 21.0293H17.895C17.5892 21.0293 17.2833 20.7999 17.2833 20.4175V18.5058C17.2833 18.1999 17.5127 17.894 17.895 17.894H19.8068C20.1127 17.894 20.4186 18.1234 20.4186 18.5058V20.4175C20.4186 20.7999 20.1892 21.0293 19.8068 21.0293ZM19.8068 14.1469H17.895C17.5892 14.1469 17.2833 13.9175 17.2833 13.5352V11.6234C17.2833 11.3175 17.5127 11.0117 17.895 11.0117H19.8068C20.1127 11.0117 20.4186 11.2411 20.4186 11.6234V13.5352C20.4186 13.9175 20.1892 14.1469 19.8068 14.1469Z" fill="#009999"/>
                                                        </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label"><?php echo e(trans('messages.Gender')); ?></label>
                                            <select id="region" name="gender" class="form-select">
                                                <option value=""><?php echo e(trans('messages.Select_Gender')); ?></option>
                                                <option value="female" <?php echo e(usersData()->gender == 'female' ? 'selected' : ''); ?>><?php echo e(trans('messages.Female')); ?></option>
                                                <option value="male" <?php echo e(usersData()->gender == 'male' ? 'selected' : ''); ?>><?php echo e(trans('messages.Male')); ?> </option>                                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="button_box">
                                        <button type="submit" class="btn-primary"><?php echo e(trans('messages.Save')); ?></button>
                                    </div>
                                </div>        
                            </div>
                        </form>
                        <div class="profile_information_banner">
                            <form action="<?php echo e(route('users.changedPasswordRequest')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="change_password_box">
                                    <h2 class="profile_details_title"><?php echo e(trans('messages.Change_Password')); ?></h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label"><?php echo e(trans('messages.Old_Password')); ?></label>
                                                <input type="password" name="old_password" value="<?php echo e(old('old_password')); ?>" class="form-control" placeholder="<?php echo e(trans('messages.Enter_Old_Password')); ?> ">
                                                <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                  <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label"><?php echo e(trans('messages.New_Password')); ?></label>
                                                <input type="password" name="new_password" value="<?php echo e(old('new_password')); ?>" class="form-control" placeholder="<?php echo e(trans('messages.Enter_New_Password')); ?>">
                                                <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                  <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label"><?php echo e(trans('messages.Confirm_Password')); ?></label>
                                                <input type="password" class="form-control" name="confirm_password" value="<?php echo e(old('confirm_password')); ?>"  placeholder="<?php echo e(trans('messages.Enter_Confirm_Password')); ?>">
                                                <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                  <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="button_box mb-3">
                                            <button type="submit" class="btn-primary"><?php echo e(trans('messages.Save')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->startSection("js"); ?>
<script type="text/javascript">

    var selectedCountries = $('#phone_number_country_code').val();
    $("#phone").intlTelInput({
        allowDropdown: true,
        // preferredCountries: ["IN"],
        initialCountry: selectedCountries,
         // initialCountry: "SG",
        separateDialCode: true
    });

    $("#phone").on('countrychange', function(e, countryData) {
        var data = $(".iti__selected-dial-code").html();
        var data1 = $("#phone").intlTelInput("getSelectedCountryData").iso2;
        $("#phone_number_prefix").val(data);
        $("#phone_number_country_code").val(data1);
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/users/profile.blade.php ENDPATH**/ ?>