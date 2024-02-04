<?php if(count($results) > 0): ?>
<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-3 col-md-4 col-sm-4 col-6  card_borderBt">
    <div class="proLink">
        <div class="product-case">
            <figure>
                <a href="<?php echo e(route('product.Details',[$product->platform_product_id])); ?>"><img src="<?php echo e($product->system_image ?? $product->image); ?>" alt=""></a>
            </figure>
            <div class="proData">
                <h3 class="product_title"><a href="<?php echo e(route('product.Details',[$product->platform_product_id])); ?>"><?php echo e($product->name ?? ''); ?></a></h3>
                <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                <div class="like-this"><i class="fas fa-heart"></i></div>
                <div class="prices"><span><?php echo e($product->price_currency ?? ''); ?> <?php echo e(number_format($product->price)); ?></span> (US$66.41)</div>
                <div class="ratings">
                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                            fill="#FFDC64"></path>
                    </svg>

                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                            fill="#FFDC64"></path>
                    </svg>

                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                            fill="#FFDC64"></path>
                    </svg>

                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                            fill="#FFDC64"></path>
                    </svg>
                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                            fill="#FFDC64"></path>
                    </svg> (00)
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/product/load-more-product.blade.php ENDPATH**/ ?>