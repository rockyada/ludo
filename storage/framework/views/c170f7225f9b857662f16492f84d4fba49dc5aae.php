<?php $__env->startSection('content'); ?>
<?php $counter = 0; ?>
<style>
    .invalid-feedback {
        display: inline;
    }
     .iti.iti--allow-dropdown.iti--separate-dial-code {
        width: 100%;
    }
    .AClass{
        right:10px;
        position: absolute;
    }
</style>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                    Edit  <?php echo e(Config('constants.CUSTOMER.CUSTOMERS_TITLE')); ?>	</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route($model.'.index')); ?>" class="text-muted"> <?php echo e(Config('constants.CUSTOMER.CUSTOMERS_TITLES')); ?> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php echo $__env->make("admin.elements.quick_links", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="<?php echo e(route($model.'.update',array(base64_encode($userDetails->id)))); ?>" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-1"></div>
                            <div class="col-xl-10">
                                <h3 class="mb-10 font-weight-bold text-dark">
                                
                                </h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label><span class="text-danger"> * </span>
                                            <input type="text" name="first_name" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($userDetails->first_name ?? ''); ?>">
                                            <?php if($errors->has('first_name')): ?>
                                            <div class=" invalid-feedback">
                                                <?php echo e($errors->first('first_name')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label><span class="text-danger"> * </span>
                                            <input type="text" name="last_name" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($userDetails->last_name ?? ''); ?>">
                                            <?php if($errors->has('last_name')): ?>
                                            <div class=" invalid-feedback">
                                                <?php echo e($errors->first('last_name')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                  
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="email">Email ID</label><span class="text-danger"> * </span>
                                            <input type="text" name="email" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($userDetails->email ?? ''); ?>">
                                            <?php if($errors->has('email')): ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($errors->first('email')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div> 
                                    <?php $phone = explode(',',$userDetails->phone_number);  ?>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label><span class="text-danger"> * </span>
                                            <input type="hidden" value="<?php echo e(@$phone[0] ?? '+65'); ?>"
                                            name="phone_number_prefix" id="phone_number_prefix">
                                            <input type="hidden" value="<?php echo e($userDetails->phone_number_country_code ?? 'SG'); ?>"
                                                name="phone_number_country_code" id="phone_number_country_code">
                                            <input type="text" id="phone" onKeyPress="if(this.value.length==10) return false;" min="0" name="phone_number" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(@$phone[1] ? $phone[1] : old('phone_number')); ?>">
                                            <?php if($errors->has('phone_number')): ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($errors->first('phone_number')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="company_name">Company Name</label><span class="text-danger"></span>
                                            <input type="text" name="company_name" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($userDetails->company_name ??old('company_name')); ?>">
                                            <?php if($errors->has('company_name')): ?>
                                            <div class=" invalid-feedback">
                                                <?php echo e($errors->first('company_name')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="birthday">Birthday</label><span class="text-danger"></span>
                                            <input type="text" id="datepicker_admin" name="birthday" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($userDetails->birthday ? $userDetails->birthday : old('birthday')); ?>" readonly>
                                            <?php if($errors->has('birthday')): ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($errors->first('birthday')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Gender</label><span class="text-danger"></span>
                                            <select name="gender" class="form-control form-control-solid form-control-lg  <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <option value="">Select Gender</option>
                                                <option value="female" <?php echo e($userDetails->gender == 'female' ? 'selected' : ''); ?>>Female</option>
                                                <option value="male" <?php echo e($userDetails->gender == 'male' ? 'selected' : ''); ?>>Male </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div>
                                        <button button type="submit" onclick="submit_form();" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
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
    </div>
</div>
<script src="https://unpkg.com/@reactivex/rxjs@5.0.0-beta.7/dist/global/Rx.umd.js"></script>
<script>
    function doIt(e) {
        var e = e || event;
        if (e.keyCode == 32) return false;
    }
    window.onload = function() {
        var inp = document.getElementById("zip_code");

        inp.onkeydown = doIt;
    };

    function submit_form() {
        $(".mws-form").submit();
    }
    $('.chosenselect_country').select2({
        placeholder: "Select Country",
        allowClear: true
    });

    var selectedCountries = $('#phone_number_country_code').val();
    $("#phone").intlTelInput({
        allowDropdown: true,
        preferredCountries: ["SG"],
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

    $('#country').on("change",function(){
      var phoneCode =  $('option:selected', this).attr("data-phonecode");
      var iso       =  $('option:selected', this).attr("data-iso");
      $('#phone_number_prefix').val(phoneCode);
      $('#phone_number_country_code').val(iso);
    });

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>