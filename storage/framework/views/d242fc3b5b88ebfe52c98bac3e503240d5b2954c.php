<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
<section class="login_Wrap">
    <div class="login-container">
        <div class="onboarding">
            <div class="logo-title">
                <a href="<?php echo e(route('web.index')); ?>"><img src="<?php echo e(asset('public/frontend/img/logo.png')); ?>" alt="" ></a>
            </div>
            <div class="login-bottom-bg">
                <div class="login-bottom-inner">
                    <div class="vector-curve">
                        <img src="<?php echo e(asset('public/frontend/img/vector.svg')); ?>" alt="">
                    </div>
                    <img src="<?php echo e(asset('public/frontend/img/login-bg.png')); ?>" alt="">
                </div>
            </div>

        </div>

        <div class="login-form loginsec">
            <div class="login-form-inner">

                <div class="row">
                    <div class="col-md-12">
                        <div class="login_headingarrow text-center">
                            
                            <h1><?php echo e(trans('messages.Log_in')); ?></h1>
                         </div>
                    </div>
                </div>

                <div class="login_formBlock">
                    <form action="<?php echo e(route('users.login')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="previous_url" value="<?php echo e(url()->previous()); ?>">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12 col-lg-4 col-form-label label-top-pd"><?php echo e(trans('messages.Email')); ?></label>
                                <div class="col-md-12 col-lg-8">
                                    <input type="text" class="form-control" name="email" value="<?php echo e(@Session()->get('rememberData')['email'] ? Session()->get('rememberData')['email'] : old('email')); ?>">
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
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <label class="col-md-12 col-lg-4 col-form-label"><?php echo e(trans('messages.Password')); ?></label>
                                <div class="col-md-12 col-lg-8 position-relative">
                                    <input type="password" class="form-control has-icon-right" id="password" name="pass" value="<?php echo e(@Session()->get('rememberData')['password'] ? Session()->get('rememberData')['password'] : old('pass')); ?>">
                                    <span class="show-password password fas fa-eye"></span>
                                    <?php $__errorArgs = ['pass'];
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
                        </div>
                        <div class="select_remendor position-relative">
                            <div class="checkStyle-1">
                                <input type="checkbox" value="1" id="remember" <?php echo e(@Session()->get('rememberData')['remember'] == 1 ? 'checked' : ''); ?> name="remember">
                                <label for="remember"><?php echo e(trans('messages.Remember_Me')); ?></label>
                            </div>
                            <?php $__errorArgs = ['remember'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="forget_pass">
                                <a href="<?php echo e(route('users.forgotPassword')); ?>" class="for_pass "><?php echo e(trans('messages.Forgot_Password')); ?>?</a>
                            </div>
                        </div>
                        <div class="orblock">
                            <h3><?php echo e(trans('messages.or')); ?></h3>
                        </div>
                        <div class="social_login">
                            <a href="javascript:void(0)"><svg width="13" height="21" viewBox="0 0 12 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.198 19.5H7.198V11.49H10.802L11.198 7.51H7.198V5.5C7.198 5.23478 7.30336 4.98043 7.4909 4.79289C7.67843 4.60536 7.93279 4.5 8.198 4.5H11.198V0.5H8.198C6.87192 0.5 5.60015 1.02678 4.66247 1.96447C3.72479 2.90215 3.198 4.17392 3.198 5.5V7.51H1.198L0.802002 11.49H3.198V19.5Z"
                                        fill="#3D6AD6" />
                                </svg>
                                <?php echo e(trans('messages.Continue_with_Facebook')); ?> </a>

                            <a href="<?php echo e(url('auth/google')); ?>"><svg width="19" height="19" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_12_21439)">
                                        <path
                                            d="M13.9933 7.13102C13.9933 6.55744 13.9456 6.13889 13.8426 5.70483H7.1394V8.29366H11.074C10.9947 8.93702 10.5663 9.9059 9.6144 10.557L9.60105 10.6436L11.7205 12.2479L11.8673 12.2622C13.2158 11.0453 13.9933 9.2548 13.9933 7.13102Z"
                                            fill="#4285F4" />
                                        <path
                                            d="M7.1394 13.952C9.06703 13.952 10.6853 13.3319 11.8673 12.2622L9.6144 10.557C9.01152 10.9678 8.20237 11.2546 7.1394 11.2546C5.25143 11.2546 3.64903 10.0377 3.07782 8.35571L2.99409 8.36266L0.790295 10.0291L0.761475 10.1074C1.93551 12.3862 4.34706 13.952 7.1394 13.952Z"
                                            fill="#34A853" />
                                        <path
                                            d="M3.07787 8.35563C2.92715 7.92158 2.83992 7.45648 2.83992 6.97594C2.83992 6.49534 2.92715 6.0303 3.06994 5.59624L3.06595 5.5038L0.834531 3.81055L0.761523 3.84448C0.277648 4.79012 0 5.85204 0 6.97594C0 8.09984 0.277648 9.1617 0.761523 10.1073L3.07787 8.35563Z"
                                            fill="#FBBC05" />
                                        <path
                                            d="M7.1394 2.69735C8.48001 2.69735 9.38433 3.26318 9.89997 3.73602L11.9149 1.81375C10.6774 0.689847 9.06703 0 7.1394 0C4.34706 0 1.93551 1.5657 0.761475 3.8445L3.06989 5.59626C3.64903 3.91428 5.25143 2.69735 7.1394 2.69735Z"
                                            fill="#EB4335" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12_21439">
                                            <rect width="14" height="14" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <?php echo e(trans('messages.Continue_with_Google')); ?></a>
                        </div>
                        <button type="submit" class="btn-Btheme w-100"><?php echo e(trans('messages.Login_Now')); ?></button>
                    </form>
                    <div class="hereby_tagline ">
                        <span> <?php echo e(trans('messages.Don’t_have_an_Account_Register_now')); ?> <a href="<?php echo e(route('users.signup')); ?>"><?php echo e(trans('messages.Register')); ?> <?php echo e(trans('messages.now')); ?> !</a></span>
                    </div>
                </div>
            </div>
        </div>
        </div>     
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/users/login.blade.php ENDPATH**/ ?>