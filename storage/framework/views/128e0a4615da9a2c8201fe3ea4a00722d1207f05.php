<?php $__env->startSection('content'); ?>
<div class="d-flex flex-column flex-root">
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-container d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid p-8">
            <div class="login-content d-flex flex-column card p-5 p-md-10">
                <a href="<?php echo e(route('adminpnlx')); ?>" class="login-logo pb-8 text-center">
                    <img src="<?php echo e(asset('/public/img/logo.png')); ?>" class="max-h-80px" alt="" />
                </a>
                <div class="login-form">
                    <form action="<?php echo e(route('forgetPassword')); ?>" method="post" class="form" id="kt_login_singin_form">
                        <?php echo csrf_field(); ?>
                        <div class="mb-12 text-center">
                            <h3 class="font-weight-bold text-dark">Forgot Password</h3>
                            <p>Enter your email to reset your password.</p>
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                            <input type="text" name="email" placeholder="Email" class="form-control form-control-solid h-auto py-5 px-6 rounded-lg border-0 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>">
                            <?php if($errors->has('email')): ?>
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="text-center">
                            <a href="javascript:void(0);" id="kt_login_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</a>
                            <a href="<?php echo e(route('adminpnlx')); ?>" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Back To
                                Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function() {
        $('input').keypress(function(e) {
            if (e.which == 13) {
                $("#kt_login_singin_form").submit();
            }
        });

        $("#kt_login_submit").click(function(e) {
            $("#kt_login_singin_form").submit();
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.login_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/login/forget_password.blade.php ENDPATH**/ ?>