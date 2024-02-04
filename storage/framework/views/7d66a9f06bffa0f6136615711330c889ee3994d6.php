
<?php $__env->startSection('content'); ?>
<div class="ludo_content">
    <div class="landing_newBlock">
        <h3 class="ludoTitle">Games</h3>
        <button type="button" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                fill="currentColor" class="me-1">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                </path>
                <path
                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                </path>
            </svg>
            Guide
        </button>
    </div>
    <div class="landing_card_box">
        <div class="row g-3">
            <!-- <div class="col-md-6">
                <a href="#!" class="new_cardBox">
                    <img src="<?php echo e(asset('public/frontend/img/lodo-img.webp')); ?>" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <a href="#!" class="new_cardBox">
                    <img src="<?php echo e(asset('public/frontend/img/lodo-img01.webp')); ?>" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <a href="#!" class="new_cardBox">
                    <img src="<?php echo e(asset('public/frontend/img/lodo-img02.jpg')); ?>" alt="">
                </a>
            </div> -->
            <?php if(count($games) > 0): ?>
            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
                <a href="<?php echo e(route('battle.gamesListing',[$game->game_name ?? ''])); ?>" class="new_cardBox">
                    <img src="<?php echo e(Config('constants.GAMES_IMAGE_ROOT_PATH').$game->game_image ?? ''); ?>" alt="">
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="col-md-6">
                <a href="#!" class="new_cardBox coming-car-box">
                <figure class="lodo-popularBox">
                <img src="<?php echo e(asset('public/frontend/img/lodo-img04.jpg')); ?>" alt="">
                <span class="coming_text">coming soon</span>
                </figure>

                </a>
            </div>
            <div class="col-md-6">
                <a href="#!" class="new_cardBox coming-car-box">
                <figure class="lodo-popularBox">
                <img src="<?php echo e(asset('public/frontend/img/lodo-img05.jpg')); ?>" alt="">
                <span class="coming_text">coming soon</span>
                </figure>

                </a>
            </div>
        </div>

       </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/frontend/game/index.blade.php ENDPATH**/ ?>