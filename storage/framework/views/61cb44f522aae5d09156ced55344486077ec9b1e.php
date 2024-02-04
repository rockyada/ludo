<?php $x = rand(100000,100000000) ?>
<?php $__currentLoopData = $productReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-12">
    <div class="reviewInnCard">
        <div class="reviewInnCardHead">
            <div class="ReviewUserInfoTag">                                        
                <div class="ReviewsUImg">
                    <img src="<?php echo e($reviews->user_image ?? ''); ?>" alt="">
                </div>
                <div class="userIngoRow">
                    <span class="ReviewNme"><?php echo e($reviews->user_info ?? ''); ?></span><p><?php echo e(date(config("Reading.date_format"),strtotime($reviews->created_at))); ?></p>
                </div>
            </div>
            <div class="reviewStarCount">
                <span><?php echo e($reviews->rating ?? '0'); ?></span>
                <?php for($i=1; $i <= 5; $i++): ?>
                <?php if($reviews->rating < $i): ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="#c0ccdb"/>
                </svg>
                <?php else: ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="#FFB400"/>
                </svg>
                <?php endif; ?>
                <?php endfor; ?>  
            </div>
        </div>                                
        <div class="reviewInnCardBody">
            <p class="reviewTxt"><?php echo $reviews->title ? $reviews->title.'<br>' : ''; ?><?php echo $reviews->review ?? ''; ?></p>
            <div class="reviewContentImg">
                <?php $__currentLoopData = $reviews->reviewsImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reviewImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span><a href="<?php echo e($reviewImages->image ?? ''); ?>" data-fancybox="gallery<?php echo e($x); ?>"><img src="<?php echo e($reviewImages->image ?? ''); ?>" alt=""></a></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>     
    </div>
</div>
<?php ++$x; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/product/load-more-product-reviews.blade.php ENDPATH**/ ?>