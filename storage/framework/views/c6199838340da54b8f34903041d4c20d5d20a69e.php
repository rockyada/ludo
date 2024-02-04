
<?php $__env->startSection('content'); ?>
<div class="ludo_block">
    <div class="landing_new_block">
        <div class="landing_new_block">
            <div class="login_registerWrap ">
                <h3 class="login_top_title">Register</h3>
                <form action="" id="signUpFormRequest" class="login_form_box" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="full_name" class="form-control">
                                <p class="checkAllErrors text-danger full_name-error"></p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Mobile number</label>
                                <input type="text" onkeypress="if(this.value.length==10) return false; return /[0-9]/i.test(event.key)" name="phone_number" class="form-control">
                                <p class="checkAllErrors text-danger phone_number-error"></p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Refer code (optional)</label>
                                <input type="text" name="refer_code" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="legal_teems_desc">By Continuing, you agree to our <a href="javascript:void(0)"> Legal Terms </a> and you are 18 years or older.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="form_button_box">
                                <div class="form_btn_box">
                                    <button type="button" class="submit_btn signUpSubmit">Submit</button>
                                </div>
                                <span class="legal_teems_desc">Already have an account? <a href="<?php echo e(route('users.login')); ?>"> Login </a></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    $("body").on("click",".signUpSubmit",function(){
        var  form_data = new FormData(document.getElementById("signUpFormRequest"));
        form_data.append('_token',_token);
        $('.checkAllErrors').empty();
        $('.loader-wrapper').show();
        $.ajax({
            url: '<?php echo e(route("users.signupRequest")); ?>',
            type: 'POST',
            data: form_data,
            processData: false,
            contentType: false,
            success: function(response) {
                window.location.href = response;
            },
            error: function(error){
                if(error.responseJSON.errors){
                    $.each(error.responseJSON.errors, function(key,val) {
                        $("."+key+'-error').html(val);
                    });
                }
                $('.loader-wrapper').hide();
            }
        });
    });    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/frontend/users/signup.blade.php ENDPATH**/ ?>