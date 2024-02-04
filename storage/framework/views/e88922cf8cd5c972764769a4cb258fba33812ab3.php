<?php $__env->startSection('title','Your Wishlist'); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbBlock">
	<div class="container">
		<div class="breadcrumbRow">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item"><a href="#"><?php echo e(trans('messages.Home')); ?></a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('messages.Your_Wishlist')); ?></li>
				</ol>
			</nav>                
		</div>
	</div>
</div>

<section class="dashboard">
	<div class="container">
		<div class="row">
			<div class="pageTopTitle col-12">
				<h2 class="RightBlockTitle"><?php echo e(trans('messages.Your_Wishlist')); ?></h2>
			</div>
			<div class="col-md-12 col-lg-3 col-xl-3 theia-sticky">
				<?php echo $__env->make('frontend.elements.side-setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col-md-12 col-lg-9 col-xl-9  w100MD" id="myProfile">
	            <div class="dashboardRightBlock wishlist_block">
	                <div class="profile_information_banner change_drop_block">
	                    <div class="row g-5">
	                    	<?php $__currentLoopData = $usersWishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                        <div class="col-lg-4 col-md-4 col-sm-6  card_borderBt">
	                            <div class="proLink">
	                                <div class="product-case">
	                                    <a class="remove_product removeWishlistProduct" data-product-id="<?php echo e($wishlist->product->id ?? ''); ?>" href="javascript:void(0)">
	                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                            <g clip-path="url(#clip0_461_71731)">
	                                            <path d="M1.21497 2.63672L1.73389 8.27464C1.77108 8.68122 2.15588 9 2.60936 9H7.39071C7.84418 9 8.22899 8.68122 8.26618 8.27464L8.78508 2.63672H1.21497ZM3.53491 7.94531C3.38155 7.94531 3.25252 7.83795 3.2428 7.69811L2.94983 3.44421C2.93981 3.29873 3.06254 3.17359 3.22391 3.16457C3.39127 3.15401 3.52432 3.26577 3.53461 3.41125L3.82758 7.66515C3.83795 7.8158 3.70551 7.94531 3.53491 7.94531ZM5.29299 7.68164C5.29299 7.82738 5.16196 7.94531 5.00002 7.94531C4.83809 7.94531 4.70706 7.82738 4.70706 7.68164V3.42773C4.70706 3.28199 4.83809 3.16406 5.00002 3.16406C5.16196 3.16406 5.29299 3.28199 5.29299 3.42773V7.68164ZM7.05022 3.44422L6.75725 7.69813C6.74762 7.83654 6.61944 7.95189 6.44655 7.9448C6.28518 7.93579 6.16245 7.81065 6.17247 7.66517L6.46543 3.41126C6.47545 3.26579 6.61707 3.15995 6.77614 3.16459C6.9375 3.17361 7.06024 3.29875 7.05022 3.44422Z" fill="Currentcolor"/>
	                                            <path d="M8.80859 1.05469H7.05078V0.791016C7.05078 0.354832 6.65652 0 6.17188 0H3.82812C3.34348 0 2.94922 0.354832 2.94922 0.791016V1.05469H1.19141C0.867793 1.05469 0.605469 1.29078 0.605469 1.58203C0.605469 1.87325 0.867793 2.10938 1.19141 2.10938C3.88605 2.10938 6.11404 2.10938 8.80859 2.10938C9.13221 2.10938 9.39453 1.87325 9.39453 1.58203C9.39453 1.29078 9.13221 1.05469 8.80859 1.05469ZM6.46484 1.05469H3.53516V0.791016C3.53516 0.645539 3.66648 0.527344 3.82812 0.527344H6.17188C6.33352 0.527344 6.46484 0.645539 6.46484 0.791016V1.05469Z" fill="Currentcolor"/>
	                                            </g>
	                                            <defs>
	                                            <clipPath id="clip0_461_71731">
	                                            <rect width="10" height="9" fill="white"/>
	                                            </clipPath>
	                                            </defs>
	                                            </svg>                                                    
	                                    </a>
	                                    <figure>
	                                        <a href="<?php echo e(url('/')); ?>/<?php echo e(session()->get('siteUrl')); ?>/product/<?php echo e($wishlist->product->platform_product_id); ?>"><img src="<?php echo e($wishlist->product->system_image ?? $wishlist->product->image); ?>" alt=""></a>
	                                    </figure>
	                                    <div class="proData">
	                                        <h3 class="product_title"><a href="<?php echo e(url('/')); ?>/<?php echo e(session()->get('siteUrl')); ?>/product/<?php echo e($wishlist->product->platform_product_id); ?>"><?php echo e($wishlist->product->productDescriptions->name ?? ''); ?></a></h3>
	                                        <div class="like-this"><i class="fas fa-heart <?php echo e(UsersData() == '' ? 'NotLogin' : ''); ?> <?php echo e($wishlist->product->productWishlist ? 'wishlist' : ''); ?> removeWishlistProduct" data-product-id="<?php echo e($wishlist->product->id ?? ''); ?>"></i></div>
                                        	<div class="prices"><span><?php echo e($wishlist->product->price_currency ?? ''); ?> <?php echo e(number_format($wishlist->product->price)); ?></span> (<?php echo e(UsersData()->currency ?? Session::get('currencylocale')); ?> <?php echo e(convertCurrency($wishlist->product->price,UsersData()->currency ?? Session::get('currencylocale'))); ?>)</div>
	                                        <div class="ratings">
	                                            <?php for($i=1; $i <= 5; $i++): ?>
	                                            <?php if($wishlist->product->ratingAveragePercentage < $i): ?>
	                                            <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
	                                                xmlns="http://www.w3.org/2000/svg">
	                                                <path
	                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
	                                                    fill="#c0ccdb"></path>
	                                            </svg>
	                                            <?php else: ?>
	                                            <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
	                                                xmlns="http://www.w3.org/2000/svg">
	                                                <path
	                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
	                                                    fill="#FFDC64"></path>
	                                            </svg>
	                                            <?php endif; ?>
	                                            <?php endfor; ?>
	                                            (<?php echo e($wishlist->product->ratingCount ?? '0'); ?>)
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                        <div class="col-sm-12 col-lg-12 btn_top_space text-center">
	                            <a href="<?php echo e(route('web.index',[session()->get('siteUrl')])); ?>/product" class="proCartBtn active d-inline-block">Continue Shopping</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>       
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>
<script type="text/javascript">
	$('body').on("click",".removeWishlistProduct",function(){
	  if($('.NotLogin').length > 0){
	    location.href = url+"/login";
	  }
	  var productId   = $(this).data('product-id');
	  var thisElement = $(this);
	  if(productId != ''){
	    $.ajax({
	      type: "POST",
	      url: url + "/product-wishlist",
	      data: {product_id:productId,_token:_token},
	      success: function(response) {
	        location.reload();
	      }
	    }); 
	  }
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/product/users-wishlist.blade.php ENDPATH**/ ?>