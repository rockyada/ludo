<?php $__env->startSection('title','Product Details'); ?>
<?php $__env->startSection('content'); ?>
<!-- breadcrumb start -->
<div class="breadcrumbBlock">
    <div class="container">
        <div class="breadcrumbRow">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('web.index')); ?>"><?php echo e(trans('messages.Home')); ?></a></li>
                    <?php if($product->platform_name == 'coupang_com'): ?>
                    <?php if(count($categoryLevelGet) > 0): ?>
                    <?php $__currentLoopData = $categoryLevelGet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="breadcrumb-item"> 
                        <a class="filter_categories_box" href="<?php echo e(url('/')); ?>/<?php echo e(siteSlugUrl(collect(request()->segments())->last()).'/product?catId='.$level->platform_category_id); ?>"><?php echo e($level->categoryDescriptions->name ?? ''); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>/<?php echo e(siteSlugUrl(collect(request()->segments())->last()).'/product'); ?>"><?php echo e(trans('messages.all_product')); ?></a></li>
                    <?php endif; ?>
                    <?php else: ?>
                    <?php if(count($naverCategories) > 0): ?>
                    <?php $__currentLoopData = $naverCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="breadcrumb-item"> 
                        <a class="filter_categories_box" href="javascript:void(0)"><?php echo e($level->naverCategoryDescriptions->title ?? ''); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>/<?php echo e(siteSlugUrl(collect(request()->segments())->last()).'/product'); ?>"><?php echo e(trans('messages.all_product')); ?></a></li>
                    <?php endif; ?>
                    <?php endif; ?>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<section class="product_details_wrapper">
    <div class="container">
        <div class="product_details_box">
            <div class="row gx-5">
                <div class="col-lg-6 customProductView">
                    <div class="product_view_box hero-wrapper swipe-arrow-style">
                        <div class="swiper productDetailsSwiper02">
                            <div class="swiper-wrapper banner-images">
                                <?php if(@$product->productImage): ?>
                                <?php $__currentLoopData = $product->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <a href="<?php echo e($image->system_thumbnail_image_path ?? $image->origin_image); ?>" data-fancybox="gallery">
                                            <img src="<?php echo e($image->system_thumbnail_image_path ?? $image->origin_image); ?>" alt="" >
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <a href="javascript:void(0)" class="product_plus_button">
                                <i class="far fa-search-plus"></i>
                            </a>
                        </div>

                        <div class="productDetailstop hero-nav">
                            <div class="swiper-button-next">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.294923 1.41L4.87492 6L0.294922 10.59L1.70492 12L7.70492 6L1.70492 1.84899e-07L0.294923 1.41Z"
                                        fill="#8B96A5" />
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.70508 10.59L3.12508 6L7.70508 1.41L6.29508 -6.16331e-08L0.295078 6L6.29508 12L7.70508 10.59Z"
                                        fill="#8B96A5" />
                                </svg>
                            </div>
                        </div>
                        <div class="hero-pagingproDea swiper-pagination hero-paging"></div>
                        <div thumbsSlider="" class="product_imgView_slider swiper productDetailsSwiper">
                            <div class="swiper-wrapper box-banner-images">
                                <?php if(@$product->productImage): ?>
                                <?php $__currentLoopData = $product->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo e($image->system_thumbnail_image_path ?? $image->origin_image); ?>" alt="" >
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 customDetailspro">
                    <div class="details_name_box">
                        <div class="product_name_box">
                            <h3 class="product_name_title"><?php echo e($product->productDescriptions->name ?? ''); ?></h3>
                            <i class="fas fa-heart <?php echo e(UsersData() == '' ? 'NotLogin' : ''); ?> <?php echo e($product->productWishlist ? 'wishlist' : ''); ?> wishlistProduct" data-product-id="<?php echo e($product->id ?? ''); ?>"></i>
                        </div>
                        <div class="ProductRatings">
                            <span>
                            <?php
                            $last=0;
                            $ratingAveragePercentage = $product->ratingAveragePercentage >5 ? 5.0 : $product->ratingAveragePercentage;
                            ?>
                            <?php for($i=1;$i<=5;$i++): ?>
                                <?php if($i<=$ratingAveragePercentage): ?>
                                <svg width="19" height="18" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                        fill="#FFDC64">
                                    </path>
                                </svg>
                                <?php elseif($ratingAveragePercentage<$i && $ratingAveragePercentage>$last): ?>
                                <svg width="19" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_500_422)">
                                    <path d="M10.2485 14.5703L14.7652 16.9467L13.904 11.9176L17.5596 8.35656L12.5087 7.62255L10.2485 3.04403V0.569458C10.6627 0.569458 11.077 0.783849 11.2914 1.21626L13.6642 6.02733L18.9731 6.79769C19.9251 6.93577 20.3067 8.10947 19.6163 8.78171L15.7754 12.5245L16.6838 17.8115C16.8474 18.76 15.8481 19.4831 14.9978 19.0361L10.2485 16.5434V14.5703Z" fill="#FFDC64"/>
                                    </g>
                                    <path d="M10.3091 0.569458C9.89489 0.569458 9.48064 0.783849 9.26625 1.21626L6.89342 6.02733L1.58453 6.79769C0.632489 6.93577 0.250947 8.10947 0.941357 8.78171L4.78222 12.5245L3.87378 17.8115C3.71027 18.76 4.70954 19.4831 5.55984 19.0361L10.3091 16.5434V0.569458Z" fill="#FFDC64"/>
                                    <defs>
                                    <clipPath id="clip0_500_422">
                                    <rect width="9.72098" height="18.6047" fill="white" transform="translate(10.2788 0.569458)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <?php else: ?>
                                <svg width="19" height="18" viewBox="0 0 10 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                        fill="#c0ccdb"></path>
                                </svg>
                                <?php endif; ?>
                                <?php
                                    $last++;
                                ?>
                            <?php endfor; ?>
                            <?php echo e($ratingAveragePercentage); ?>

                            </span>
                            <span class="ratting_reviewTotel">(<?php echo e($product->ratingCount ?? '0'); ?>) <?php echo e(trans('messages.reviews')); ?></span>
                        </div>
                        <div class="prices"><span><?php echo e($product->price_currency ?? ''); ?> <span class="pricesAmounts"><?php echo e(number_format($product->price)); ?></span> </span> <span class="currencySet">(<?php echo e(UsersData()->currency ?? Session::get('currencylocale')); ?> <?php echo e(convertCurrency($product->price,UsersData()->currency ?? Session::get('currencylocale'))); ?>)</span></div>
                        <div class="ProSeller_box">
                            <?php if(@$product->seller_name): ?>
                            <h3 class="seller_box_title">Seller : <span> <?php echo e($product->seller_name ?? ''); ?> </span></h3>
                            <?php endif; ?>
                            <?php if($product->platform_name == "shopping_naver_com" && $product->is_shopping_naver_product == 1): ?>
                                <?php if(@$product->productVariants): ?>
                                <div class="radioRow"> 
                                <?php $__currentLoopData = $product->productVariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $variants): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="check_item_box color_select_box">
                                        <div class="form-check">
                                            <input class="form-check-input shoppingNaverFilter" data-price="<?php echo e(number_format($product->price + $variants->price)); ?>" name="radio" value="<?php echo e($variants->id ?? ''); ?>" data-price_currency="(<?php echo e(UsersData()->currency ?? Session::get('currencylocale')); ?> <?php echo e(convertCurrency($product->price + $variants->price,UsersData()->currency ?? Session::get('currencylocale'))); ?>)" type="radio" id="proColorSelectBox_<?php echo e($variants->id ?? ''); ?>" <?php echo e($keys == 0 ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="proColorSelectBox_<?php echo e($variants->id ?? ''); ?>">
                                             <span><?php echo e($variants->productVariantDescriptions->name ?? ''); ?></span>
                                            </label>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                                <?php endif; ?>
                            <?php elseif($product->platform_name == "shopping_naver_com" && $product->is_shopping_naver_product == 2): ?>
                                <?php $combination = $product->productVariants->where('display_component_type',"COMBINATION"); ?>
                                <?php if(count($combination) > 0): ?>
                                    <input type="hidden" id="totalCombination" value="<?php echo e(count($combination)); ?>">
                                    <input type="hidden" id="totalCombinationAllowed" value="">
                                    <?php $__currentLoopData = $combination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $combination_var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="filter_Box">
                                        <div class="form-group mb-0">
                                            <select class="form-select combinationGet combinationAppends_<?php echo e($keys+1); ?>" data-varant="<?php echo e($keys+1); ?>" <?php echo $keys != 0 ? 'data-level='.$keys+1 :''; ?> data-default-name="<?php echo e($combination_var->productVariantDescriptions->name ?? ''); ?>" aria-label="Default select">
                                                <option value="" selected disabled="disabled"><?php echo e($combination_var->productVariantDescriptions->name ?? ''); ?></option>
                                                <?php if($keys == 0): ?>
                                                <?php $__currentLoopData = $combination_var->productVariantsValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($values->id ?? ''); ?>" data-combination-id="<?php echo e($keys+1); ?>"><?php echo e($values->productVariantValueDescriptions->name ?? ''); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php elseif($product->platform_name == "coupang_com"): ?>
                                <?php if(@$product->productVariants): ?>
                                <?php $__currentLoopData = $product->productVariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variants): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(count($variants->productVariantsValues)): ?>
                                <div class="filter_Box">
                                    <h3 class="product_filter_head"><?php echo e($variants->productVariantDescriptions->name ?? ''); ?></h3>
                                    <div class="form-group mb-0">
                                        <select class="form-select productVariantsValue" aria-label="Default select">
                                            <?php $__currentLoopData = $variants->productVariantsValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($values->value_id ?? ''); ?>" <?php echo e($values->is_selected == 1 ? 'selected' : ''); ?> ><?php echo e($values->productVariantValueDescriptions->name ?? ''); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="pro_material_box">
                                <div class="shipping_material_box">
                                    <span><svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_122_35122)">
                                                <path
                                                    d="M10.2085 20.5474V25.9584C10.2085 26.3364 10.4512 26.6712 10.8105 26.7902C10.9003 26.8194 10.9925 26.8334 11.0835 26.8334C11.3565 26.8334 11.6202 26.705 11.7882 26.4764L14.9533 22.169L10.2085 20.5474Z"
                                                    fill="#009999" />
                                                <path
                                                    d="M27.6326 0.16227C27.3642 -0.0278966 27.0119 -0.0535633 26.7202 0.0992701L0.470219 13.8076C0.159885 13.9698 -0.0232814 14.3011 0.00238522 14.6499C0.0292186 14.9999 0.261385 15.2986 0.591552 15.4118L7.88905 17.9061L23.4302 4.61777L11.4042 19.1066L23.6344 23.2868C23.7254 23.3171 23.8211 23.3334 23.9167 23.3334C24.0754 23.3334 24.2329 23.2903 24.3717 23.2063C24.5934 23.0709 24.7439 22.8434 24.7824 22.5879L27.9907 1.0046C28.0386 0.677937 27.9009 0.353603 27.6326 0.16227Z"
                                                    fill="#009999" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_122_35122">
                                                    <rect width="28" height="28" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="shipping_material_title">Fast Shipping</span>
                                </div>
                                <div class="shipping_material_box">
                                    <span><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_122_35125)">
                                                <path
                                                    d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z"
                                                    fill="#009999" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.94051 19.34L4.18599 14.2513C3.53507 13.5546 3.57243 12.4523 4.26911 11.8014C4.96579 11.1505 6.06802 11.188 6.71894 11.8845L10.3864 15.8097L16.1914 10.3859C16.2436 10.337 16.2982 10.2923 16.3546 10.2512L19.0845 7.70059C19.7812 7.04967 20.8835 7.08714 21.5343 7.78381C22.1853 8.48039 22.1478 9.58273 21.4512 10.2336L13.1134 18.0239L13.1045 18.0144L10.2203 20.7092L8.94051 19.34Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_122_35125">
                                                    <rect width="26" height="26" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </span>
                                    <span class="shipping_material_title">Easy Shopping</span>
                                </div>
                                <div class="shipping_material_box">
                                    <span><svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2915 3.77876C24.2448 3.43065 24.0036 3.14429 23.6776 3.05018L13.2277 0.0322941C13.0787 -0.0107647 12.9214 -0.0107647 12.7723 0.0322941L2.32245 3.05018C1.9964 3.14429 1.7552 3.43053 1.70853 3.77876C1.64792 4.23135 0.265217 14.925 3.81175 20.2448C7.3541 25.5582 12.5798 26.9198 12.8005 26.9752C12.8661 26.9917 12.9329 26.9998 13 26.9998C13.0671 26.9998 13.1339 26.9916 13.1995 26.9752C13.4203 26.9198 18.646 25.5582 22.1883 20.2448C25.7348 14.9251 24.3521 4.23147 24.2915 3.77876ZM19.7388 10.0218L12.611 17.4238C12.4451 17.5961 12.2276 17.6823 12.0102 17.6823C11.7928 17.6823 11.5753 17.5962 11.4094 17.4238L7.00233 12.8472C6.84293 12.6818 6.75343 12.4574 6.75343 12.2234C6.75343 11.9894 6.84305 11.7649 7.00233 11.5995L7.87738 10.6908C8.20921 10.3463 8.74722 10.3462 9.07893 10.6908L12.0102 13.7348L17.6622 7.86524C17.8215 7.69971 18.0377 7.60676 18.263 7.60676C18.4883 7.60676 18.7045 7.69971 18.8638 7.86524L19.7388 8.77394C20.0706 9.11853 20.0706 9.67723 19.7388 10.0218Z"
                                                fill="#009999" />
                                        </svg>
                                    </span>
                                    <span class="shipping_material_title">Secure Payment</span>
                                </div>
                            </div>
                            <div class="productBuyCart">
                                <div class="productBuyAdd">
                                    <a href="javascript:void(0)" class="proBuyBtn"><svg width="30" height="30"
                                            viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_122_34826)">
                                                <path
                                                    d="M0.44537 10.8437C0.841522 10.3467 1.43584 10.0616 2.07603 10.0616H7.85361L10.9866 2.88777C11.1808 2.44299 11.6989 2.23972 12.1437 2.43408C12.5886 2.62832 12.7917 3.14646 12.5974 3.59131L9.77174 10.0616H20.2283L17.4026 3.59131C17.2083 3.14646 17.4114 2.62838 17.8563 2.43408C18.3011 2.23972 18.8192 2.44287 19.0134 2.88777L22.1464 10.0616H27.924C28.5642 10.0616 29.1585 10.3467 29.5546 10.8437C29.9435 11.3317 30.087 11.959 29.9483 12.565L26.8629 26.0416C26.6475 26.9826 25.8151 27.6398 24.8386 27.6398H5.16141C4.18494 27.6398 3.3525 26.9826 3.13705 26.0416L0.0516777 12.5649C-0.0870132 11.959 0.0564842 11.3317 0.44537 10.8437ZM5.16141 25.8819H24.8386C24.9878 25.8819 25.1186 25.784 25.1494 25.6492L28.2348 12.1727C28.259 12.067 28.2184 11.9874 28.18 11.9393C28.1443 11.8945 28.0636 11.8195 27.924 11.8195H22.914L23.1442 12.3466C23.3385 12.7915 23.1354 13.3095 22.6905 13.5038C22.5761 13.5539 22.4568 13.5776 22.3393 13.5776C22.0005 13.5776 21.6776 13.3805 21.5334 13.0502L20.9959 11.8196H9.00398L8.4665 13.0502C8.32224 13.3806 7.99939 13.5776 7.6606 13.5776C7.54318 13.5776 7.42383 13.5539 7.30933 13.5038C6.86449 13.3096 6.66134 12.7915 6.85564 12.3466L7.08586 11.8195H2.07591C1.93623 11.8195 1.85555 11.8945 1.81992 11.9393C1.78154 11.9874 1.74088 12.067 1.76508 12.1727L4.85045 25.6492C4.88139 25.784 5.01217 25.8819 5.16141 25.8819Z"
                                                    fill="white" />
                                                <path
                                                    d="M20.2734 15.6279C20.7588 15.6279 21.1523 16.0214 21.1523 16.5068V22.9521C21.1523 23.4375 20.7588 23.8311 20.2734 23.8311C19.788 23.8311 19.3945 23.4375 19.3945 22.9521V16.5068C19.3945 16.0214 19.788 15.6279 20.2734 15.6279Z"
                                                    fill="white" />
                                                <path
                                                    d="M15 15.6279C15.4854 15.6279 15.8789 16.0214 15.8789 16.5068V22.9521C15.8789 23.4375 15.4854 23.8311 15 23.8311C14.5146 23.8311 14.1211 23.4375 14.1211 22.9521V16.5068C14.1211 16.0214 14.5146 15.6279 15 15.6279Z"
                                                    fill="white" />
                                                <path
                                                    d="M9.72656 15.6279C10.212 15.6279 10.6055 16.0214 10.6055 16.5068V22.9521C10.6055 23.4375 10.212 23.8311 9.72656 23.8311C9.24117 23.8311 8.84766 23.4375 8.84766 22.9521V16.5068C8.84771 16.0214 9.24117 15.6279 9.72656 15.6279Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_122_34826">
                                                    <rect width="30" height="30" fill="white"
                                                        transform="matrix(-1 0 0 1 30 0)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Add to Cart</a>
                                </div>
                                <div class="productBuyAdd">
                                    <a href="javascript:void(0)" class="proCartBtn active"><svg width="30"
                                            height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.2903 12.8564C22.9657 12.8564 22.6552 12.9175 22.369 13.0277C22.0524 11.9658 21.0675 11.1892 19.9041 11.1892C19.5695 11.1892 19.2499 11.2541 18.9564 11.3709C18.6144 10.3518 17.6509 9.61512 16.518 9.61512C16.2335 9.61512 15.9599 9.66223 15.7038 9.74795V7.0251C15.7038 5.60695 14.5501 4.45312 13.1319 4.45312C11.7137 4.45312 10.5599 5.60689 10.5599 7.0251V18.1499L9.55536 16.6588L9.53204 16.6298C8.5476 15.4061 6.81575 15.1342 5.50366 15.9973C4.81758 16.4487 4.35276 17.1411 4.19485 17.9469C4.03805 18.7471 4.20364 19.5579 4.66114 20.232L9.13805 27.2888L9.15569 27.3156C10.3102 28.9965 12.2169 30.0001 14.2561 30.0001H19.2806C22.9098 30.0001 25.8622 27.0475 25.8622 23.4184V15.4284C25.8622 14.0102 24.7085 12.8564 23.2903 12.8564ZM24.1044 23.4184C24.1044 26.0783 21.9404 28.2422 19.2806 28.2422H14.2561C12.8013 28.2422 11.4408 27.5289 10.6134 26.3331L6.13764 19.278L6.12001 19.2512C5.92465 18.9668 5.85364 18.6237 5.91997 18.2851C5.98635 17.9465 6.18165 17.6555 6.46993 17.4659C7.01215 17.1091 7.72495 17.2139 8.1419 17.7066L12.3179 23.9055V7.02516C12.3179 6.57627 12.6831 6.211 13.132 6.211C13.581 6.211 13.9462 6.57621 13.9462 7.02516V15.8081H15.704V12.1871C15.704 11.7382 16.0692 11.3729 16.5182 11.3729C16.9671 11.3729 17.3323 11.7381 17.3323 12.1871V15.8081H19.0901V13.7611C19.0901 13.3122 19.4554 12.9469 19.9043 12.9469C20.3532 12.9469 20.7185 13.3121 20.7185 13.7611V15.8081H22.4763V15.4978V15.4284C22.4763 14.9794 22.8415 14.6142 23.2904 14.6142C23.7394 14.6142 24.1046 14.9794 24.1046 15.4284V23.4184H24.1044Z"
                                                fill="white" />
                                            <path d="M13.9619 0H12.2041V2.43164H13.9619V0Z" fill="white" />
                                            <path
                                                d="M16.7273 1.03822L15.0894 2.83545L16.3886 4.01951L18.0265 2.22229L16.7273 1.03822Z"
                                                fill="white" />
                                            <path
                                                d="M19.3709 4.85051L16.9497 5.07568L17.1125 6.82594L19.5337 6.60077L19.3709 4.85051Z"
                                                fill="white" />
                                            <path
                                                d="M9.38465 1.03713L8.08545 2.22119L9.7234 4.01842L11.0226 2.83435L9.38465 1.03713Z"
                                                fill="white" />
                                            <path
                                                d="M6.7409 4.85082L6.57812 6.60107L8.99931 6.82624L9.16208 5.07599L6.7409 4.85082Z"
                                                fill="white" />
                                        </svg>
                                        Buy Now</a>
                                </div>
                            </div>
                            <a href="<?php echo e($product->platform_detail_url ?? ''); ?>" target="_blank" class="product_onOriginal "><?php echo e(trans('messages.see_more_on_original_product_page')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ProReference_wrapper">
    <div class="container">
        <div class="Product_Reference">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#productdetailid" type="button" role="tab" aria-controls="productdetailid"
                        aria-selected="true"><?php echo e(trans('messages.product_details')); ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#ShoppingReview03"
                        type="button" role="tab" aria-controls="ShoppingReview03" aria-selected="false"><?php echo e(trans('messages.product_review')); ?></button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="productdetailid" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="proReference_box">
                        <p class="ProReference_title"><?php echo e(trans('messages.product_description_heading')); ?></p>
                        <div class="Material_box01 productVariantsDataShow">
                            <div class="row"> 
                            <?php if($product->platform_name == "shopping_naver_com"): ?>
                                <?php $__currentLoopData = $product->productSpecifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6">
                                    <h3 class="material_title"><?php echo e($specification->productSpecificationDescriptions->title ?? ''); ?></h3>
                                    <p class="marerial_desc"><?php echo e($specification->productSpecificationDescriptions->description ?? ''); ?></p>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $product->productDescriptionSpecifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specificationDes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($specificationDes->display_type == "IMAGE"): ?>
                                        <div class="col-md-12 text-center">
                                            <img src="<?php echo e($specificationDes->image); ?>"> 
                                        </div>
                                    <?php else: ?>
                                        <div class="col-md-12 text-center">
                                            <?php echo $specificationDes->description ?? ''; ?>

                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ShoppingReview03" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="reviewsBlock">        
                        <div class="Ratings_wrapper">
                            <h3 class="Description_heading_Btn"><?php echo e(trans('messages.product_review')); ?></h3>
                            <?php
                                $totalCount=$productReviews->total();
                                $fivePercent=$fourPercent=$threePercent=$twoPercent=$onePercent=0;
                                if($totalCount > 0){    
                                $fivePercent=($productReviews->where('rating','5')->count()/$totalCount)*100;
                                $fourPercent=($productReviews->where('rating','4')->count()/$totalCount)*100;
                                $threePercent=($productReviews->where('rating','3')->count()/$totalCount)*100;
                                $twoPercent=($productReviews->where('rating','2')->count()/$totalCount)*100;
                                $onePercent=($productReviews->where('rating','1')->count()/$totalCount)*100;
                                }
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="reviews-rating-box">
                                        <div class="reviewBar">                                    
                                            <div class="rating-boxes">
                                                <div class="rating-titles">5</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($fivePercent); ?>%" aria-valuenow="<?php echo e($fivePercent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>    
                                            <div class="rating-boxes">
                                                <div class="rating-titles">4</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($fourPercent); ?>%" aria-valuenow="<?php echo e($fourPercent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>    
                                            <div class="rating-boxes">
                                                <div class="rating-titles">3</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($threePercent); ?>%" aria-valuenow="<?php echo e($threePercent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                
                                            <div class="rating-boxes">
                                                <div class="rating-titles">2</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($twoPercent); ?>%" aria-valuenow="<?php echo e($twoPercent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="rating-boxes">
                                                <div class="rating-titles">1</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($onePercent); ?>%" aria-valuenow="<?php echo e($onePercent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>    
                                        </div>    

                                        <div class="reviewCount">
                                            <div class="reviewcountBlock">
                                                <span class="reviewCountValue"><?php echo e(number_format($productReviews->avg('rating'),1)); ?><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="#FFB400"/>
                                                    </svg>
                                                    </span>
                                                <span class="totalReviews"><?php echo e($totalCount); ?> Reviews</span>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviewListing">
                            <div class="reviewListHeader">
                                <h3 class="reviewsListTitle">Reviews</h3>  
                            </div>
                            <?php if(@count($productReviews) > 0): ?>
                            <div class="reviewsRow">
                                <div class="row gx-15 appendItemsReviews">
                                    <?php $__currentLoopData = $productReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $reviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <span><a href="<?php echo e($reviewImages->image ?? ''); ?>" data-fancybox="gallery<?php echo e($keys ?? ''); ?>"><img src="<?php echo e($reviewImages->image ?? ''); ?>" alt=""></a></span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <?php else: ?>
                            <p class="text-center">There are no Reviews.</p>
                            <?php endif; ?>
                            <input type="hidden" id="artical_count" value="<?php echo e(@$productReviews->total()); ?>">
                            <input type="hidden" id="urls" value="<?php echo e(url()->full()); ?>?page=">
                            <input type="hidden" id="looder_count" value="<?php echo e(@count($productReviews)); ?>">
                            <?php if(@count($productReviews) < @$productReviews->total()): ?>
                            <div class="text-center hidden">
                                <input type="hidden" id="counter" value="2">
                                <a href="javascript:void(0);" class="seemore-btn" onclick="loadMore()">Show More</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="shipping_returns_wrapper">
    <div class="container">
        <h2 class="product_section_title">Shipping and Returns</h2>
        <div class="shipping_returns_box">

            <ul class="shipping_returns_box">
                <li class="shipping_text_box">
                    <span class="shipping_box_desc">
                        Please note, we reserve the right to cancel orders which are on the <u> list of prohibited
                            items</u> or out of stock or non-deliverable to your destination address. We strive to
                        give our best service to our customers and handle orders in the appropriate and quick way.
                    </span>
                </li>
                <li class="shipping_text_box">
                    <span class="shipping_box_desc">
                        International shipping cost will be calculated after your order arrived at our Warehouse (2
                        business days). You will receive Payment request from our team. Please pay shipping cost
                        within <strong> 10 days. </strong>If not paid, starting from the 31st day, we will charge 1
                        USD per day for warehouse storage.
                    </span>
                </li>
                <li class="shipping_text_box">
                    <span class="shipping_box_desc m-0">We offer the following <u> shipping methods</u> for
                        international shipping:</span>
                    <h5 class="shipping_purchase_title">Personal purchase:</h5>
                    <ol class="shipping_purchase_box">
                        <li>KoreaEasyShipping ® 2-8 days</li>
                        <li>EMS Standard 3-9 days</li>
                        <li>EMS Premium 2-9 days</li>
                        <li>Korea K-Parcel Air 14-30 days</li>
                        <li>Korea K-Parcel Ship 25-50 days</li>
                        <li>DHL 2-10 days</li>
                        <li>UPS 2-10 days</li>
                    </ol>

                    <span class="purchMeth_desc">More <u>shipping methods</u> are coming soon. </span>
                    <h5 class="shipping_purchase_title">Commercial B2B purchase:</h5>
                    <ol class="shipping_purchase_box">
                        <li>Korea Air CARGO 14-30 days Minimum weight per shipment - 31 KG</li>
                        <li>Korea Sea CARGO 25-50 days Maximum weight per shipment – 1,000 KG</li>
                    </ol>
                </li>



            </ul>
        </div>
    </div>
</section>

<!-- <section class="recent_products_wrapper product_list_cards mt-0">
    <div class="container">
        <div class="recent_search_block ">
            <div class="recent_search_head">
                <h2 class="product_section_title mb-1">Recent Search Products</h2>
            </div>
            <div class="hero-wrapper swipe-arrow-style ">
                <div class="swiper recentSearch-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg01.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg02.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg03.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg04.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg01.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recentSearch_next hero-nav">
                    <div class="swiper-button-next">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.294923 1.41L4.87492 6L0.294922 10.59L1.70492 12L7.70492 6L1.70492 1.84899e-07L0.294923 1.41Z"
                                fill="#8B96A5" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.70508 10.59L3.12508 6L7.70508 1.41L6.29508 -6.16331e-08L0.295078 6L6.29508 12L7.70508 10.59Z"
                                fill="#8B96A5" />
                        </svg>
                    </div>
                </div>
                <div class="hero-recentSear swiper-pagination hero-paging"></div>
            </div>
        </div>
        <div class="recent_search_block  border-0 pt-3">
            <div class="recent_search_head">
                <h2 class="product_section_title mb-1">Related Products</h2>
            </div>
            <div class="hero-wrapper swipe-arrow-style ">
                <div class="swiper RelatedPro-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg01.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg02.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg03.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg04.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="#!"><img src="<?php echo e(asset('public/frontend/img/productImg01.png')); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="#!">Louis Philippe Sport</a></h3>
                                        <p class="product_description">Men Polo Collar Slim Fit T-shirt</p>

                                        <div class="like-this"><i class="fas fa-heart"></i></div>
                                        <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
                                        <div class="ratings">
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>

                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg>
                                            <svg width="12" height="11" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="#FFDC64"></path>
                                            </svg> (245)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Relatednext-nav hero-nav">
                    <div class="swiper-button-next">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.294923 1.41L4.87492 6L0.294922 10.59L1.70492 12L7.70492 6L1.70492 1.84899e-07L0.294923 1.41Z"
                                fill="#8B96A5" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.70508 10.59L3.12508 6L7.70508 1.41L6.29508 -6.16331e-08L0.295078 6L6.29508 12L7.70508 10.59Z"
                                fill="#8B96A5" />
                        </svg>
                    </div>
                </div>
                <div class="hero-relatedned swiper-pagination hero-paging"></div>
            </div>
        </div>
    </div>
</section> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>
<script>
    var variantId = [];
    $('.productVariantsValue').each(function(){ 
        variantId.push($(this).find(":selected").val()); 
    });
    variantFunction(variantId)
    function variantFunction(argument) {
        if(argument.length > 0){
            var variantId   = argument.join(':');
            var product_id  = "<?php echo e($product->id ?? ''); ?>";
            if(product_id){
                $.ajax({
                    type: "POST",
                    url : "<?php echo e(route('product.variantGroup')); ?>",
                    data: {value_id:variantId,product_id:product_id,_token:_token},
                    success: function(response) {
                        if(response.data){
                            var html = '<div class="row">'
                            $.each(response.data.product_specifications, function(key,val) {
                                if(val.product_specification_descriptions != null){
                                    html += `
                                            <div class="col-md-6">
                                                <h3 class="material_title">${val.product_specification_descriptions.title ?? ''}</h3>
                                                <p class="marerial_desc">${val.product_specification_descriptions.description ?? ''}</p>
                                            </div>`;
                                }
                            });
                            $.each(response.data.product_description_specifications, function(key,val) {
                                if(val.display_type == "IMAGE"){
                                    html += `<div class="col-md-12 text-center">
                                                <img src="${val.image}"> 
                                            </div>`;
                                }else{
                                    html += `<div class="col-md-12 text-center">
                                                ${val.description}
                                            </div>`;
                                }
                            });
                            html +='</div>';
                            $('.productVariantsDataShow').append(html);
                        }
                    }
                });
            }
        }
    }   

    $("body").on("change",".productVariantsValue",function(){
        var variant_value_id = [];
        $('.productVariantsValue').each(function(){ 
            variant_value_id.push($(this).find(":selected").val()); 
        });
        var variant_value_id   = variant_value_id.join(':');
        var product_id  = "<?php echo e($product->id ?? ''); ?>";
        $('.loader-wrapper').show();
        if(product_id){
            $.ajax({
                type: "POST",
                url : "<?php echo e(route('product.variantValuesGroup')); ?>",
                data: {value_id:variant_value_id,product_id:product_id,_token:_token},
                success: function(response) {
                    if(response.data){ 
                        $('.pricesAmounts').html(parseFloat(response.data.price).toLocaleString(window.document.documentElement.lang));
                        $('.currencySet').html('('+response.currency+')');
                        $('.productVariantsDataShow').empty('');
                        var html = '<div class="row">';
                        $.each(response.data.product_specifications, function(key,val) {
                            if(val.product_specification_descriptions){
                                html += `
                                    <div class="col-md-6">
                                        <h3 class="material_title">${val.product_specification_descriptions.title ?? ''}</h3>
                                        <p class="marerial_desc">${val.product_specification_descriptions.description ?? ''}</p>
                                    </div>`;
                            }
                        });
                        $.each(response.data.product_description_specifications, function(key,val) {
                            if(val.display_type == "IMAGE"){
                                html += `<div class="col-md-12 text-center">
                                            <img src="${val.image}"> 
                                        </div>`;
                            }else{
                                html += `<div class="col-md-12 text-center">
                                            ${val.description}
                                        </div>`;
                            }
                        });
                        html +='</div>';
                        $('.productVariantsDataShow').append(html);
                        if(response.data.product_variant_values_groups_images != ''){
                            var ImageBannerOne = '';
                            var ImageBannerTwo = '';
                            $('.box-banner-images').empty('');
                            $('.banner-images').empty('');
                            $.each(response.data.product_variant_values_groups_images, function(key,val) {
                                ImageBannerOne += `<div class="swiper-slide swiper-image-active" role="group" aria-label="1 / 5" style="width: 501px;margin-right: 30px;">
                                                <a href="${val.system_origin_image_path ?? val.origin_image}" data-fancybox="gallery">
                                                    <img src="${val.system_origin_image_path ?? val.origin_image}" alt="" >
                                                </a>
                                            </div>`;
                                ImageBannerTwo += `<div class="swiper-slide small-image"  style="width: 88.2px; margin-right: 15px;">
                                                            <img src="${val.system_origin_image_path ?? val.origin_image}" alt="" >
                                                        </div>`;
                            });   
                            $('.banner-images').append(ImageBannerOne);
                            $('.box-banner-images').append(ImageBannerTwo);
                            $(".small-image img").click(function(){
                            var img=$(this).attr("src");
                            $(".swiper-image-active img").attr('src',img);
                            
                        })
                       
                        var mySwiper = new Swiper ('.productDetailsSwiper', {
                        loop:false,
                        slidesPerView: 3,
                        spaceBetween: 25,
                        breakpoints: {
                            768: {
                                slidesPerView: 5
                            }
                        }
                        });
                        }
                      
                    }
                    $('.loader-wrapper').hide();
                }
            });
        }

    });

    $(".shoppingNaverFilter").on("click",function(){
        $('.pricesAmounts').html($(this).data('price'));
        $('.currencySet').html($(this).data('price_currency'));
    });

    $('body').on("change",".combinationGet",function(){
        var variantTag = $(this).data('varant');
        var totalCombination = $('#totalCombination').val();
        var price            = $('.pricesAmounts').html();
        var textArray        = [];
        var totalCombinationvariant = '';
        if(variantTag == totalCombination){
            $.each($('.combinationGet'), function(key,val) {
                totalCombinationvariant +=  totalCombinationvariant == '' ? $(this).find(':selected').val() : ','+$(this).find(':selected').val();
            });
        }
        var variant_id = $(this).val();
        var product_id = "<?php echo e($product->id ?? ''); ?>";
        if(variant_id && variantTag){
            $('.loader-wrapper').show();
            $.ajax({
                type: "POST",
                url : "<?php echo e(route('product.variantCombinationGet')); ?>",
                data: {product_id:product_id,price:price,variantTag:variantTag,variant_id:variant_id,totalCombination:totalCombination,totalCombinationvariant:totalCombinationvariant,_token:_token},
                success: function(response) {
                    var tureData  = 0;
                    var alreadyVarants  =  $('#totalCombinationAllowed').val();
                    if(response.variantids != 0){
                        var selectedmy    = alreadyVarants != '' ? alreadyVarants.split(",") : [];
                        if(selectedmy != ''){
                            $.each(selectedmy, function(key,val) {
                                if(val == response.variantids){
                                    return tureData = 1;
                                }
                            });
                        }
                        if(tureData == 0){
                            $('#totalCombinationAllowed').val((alreadyVarants != '' ? alreadyVarants+',' : '')+response.variantids);
                        }
                    }
                    if(tureData == 1){
                        if(variantTag == totalCombination){
                            var defaultName = []
                            $.each($('.combinationGet'),function(key,val) {
                                if(key != 0){
                                    defaultName[parseInt(key+1)] = $(this).data('default-name');
                                }
                            });
                            $.each(defaultName,function(key,val) {
                                if(key != 1){
                                    $('.combinationAppends_'+key).empty('');
                                    $('.combinationAppends_'+key).append('<option value="">'+val+'</option>');
                                }else{
                                    $('.combinationAppends_'+key).val('');
                                }
                            });
                        }
                        alert('This option has already been selected.');
                    }else{
                        if(response.data != ''){
                            var text = $('.combinationAppends_'+parseInt(variantTag+1)).find(":selected").text();
                            var html = '<option value="">'+text+'</option>';
                            $('.combinationAppends_'+parseInt(variantTag+1)).empty();
                            $.each(response.data, function(key,val) {
                                html += `<option value="${val.id ?? ''}">${val.name ?? ''}</option>`;
                            });
                            $('.combinationAppends_'+parseInt(variantTag+1)).append(html);
                        }
                        if(response.price != 0){
                            $('.pricesAmounts').html(response.price);
                            $('.currencySet').html(response.currency);
                        }
                        if(variantTag == totalCombination){
                            var defaultName = []
                            $.each($('.combinationGet'),function(key,val) {
                                if(key != 0){
                                    defaultName[parseInt(key+1)] = $(this).data('default-name');
                                }
                            });
                            $.each(defaultName,function(key,val) {
                                if(key != 1){
                                    $('.combinationAppends_'+key).empty('');
                                    $('.combinationAppends_'+key).append('<option value="">'+val+'</option>');
                                }else{
                                    $('.combinationAppends_'+key).val('');
                                }
                            });
                        }
                    }
                    $('.loader-wrapper').hide();
                }
            });
        }
    });

    function loadMore(){
        var page           =  $('#counter').val();
        var Urls           = $('#urls').val();
        
        
        $.ajax({
            url: Urls+page ,
            type: 'get',
            data: {
            },
            datatype: 'html',
            beforeSend: function () {
                $('.loader-wrapper').show();
            }
        }) 
        .done(function (data) {
            if (data.view == "") {
                $('.loader-wrapper').hide();
                return;
            } else {
                var skip           = $('#looder_count').val();
                $('#looder_count').val(parseInt(skip)+data.skipCount);
                if(parseInt($('#artical_count').val()) <= parseInt($('#looder_count').val())){
                   $('.seemore-btn').hide();
                }
                $('.loader-wrapper').hide();
                $('.appendItemsReviews').append(data.html);
                $('#counter').val( function(i, oldval) {
                    return parseInt( oldval, 10) + 1;
                });
            }
        })
        page + 1;
    }


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/product/product-details.blade.php ENDPATH**/ ?>