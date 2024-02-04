<?php $__env->startSection('content'); ?>
<div class="ludo_block">
    <div class="landing_new_block">
        <div class="landing_new_img">
            <img src="<?php echo e(asset('public/frontend/img/landingNew.webp')); ?>" alt="landingNew">
        </div>
        <div class="game_desc">
            <i>This Game involves an element of financial risk and may be
                addictive. Please Play
                responsibly and at your own risk.</i>
        </div>
        <div class="ludo_content_box">
            <div class="play_now_box">
                <a class="play_nowBtn" href="<?php echo e(route('users.login')); ?>">Play Now</a>
            </div>
            <a class="help_btn_box bg-primary shadow-lg rounded-circle d-flex align-items-center justify-content-center text-white"
                href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="30" height="30"
                    fill="currentColor">
                    <path
                        d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/frontend/index.blade.php ENDPATH**/ ?>