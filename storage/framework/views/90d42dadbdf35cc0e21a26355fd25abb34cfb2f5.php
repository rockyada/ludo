
<?php $__env->startSection('content'); ?>
<div class="ludo_block">
    <div class="landing_new_block">
        <div class="login_registerWrap ">
            <h3 class="login_top_title">Login</h3>
            <form action="" method="POST" class="login_form_box">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Mobile Number</label>
                            <div class="input_icon position-relative">
                                <input type="text" onkeypress="if(this.value.length==10) return false; return /[0-9]/i.test(event.key)" name="phone_number" class="form-control">
                                <span class="input_svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p class="legal_teems_desc text-center">By Continuing, you agree to our <a href="#!"> Legal Terms </a> and you are 18 years or older.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_button_box">
                            <div class="form_btn_box">
                                <button type="submit" class="submit_btn">GET OTP</button>
                            </div>
                            <span class="legal_teems_desc">Don't have an account? <a href="<?php echo e(route('users.signup')); ?>"> Sign Up </a></span>
                        </div>
                    </div>
                </div>
            </form>
            </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/frontend/users/login.blade.php ENDPATH**/ ?>