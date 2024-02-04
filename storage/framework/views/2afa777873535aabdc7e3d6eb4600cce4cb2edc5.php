<?php $__env->startSection('title','Product Listing'); ?>
<?php $__env->startSection('content'); ?>
<!-- breadcrumb start -->
<div class="breadcrumbBlock">
    <div class="container">
        <div class="breadcrumbRow">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('web.index')); ?>"><?php echo e(trans('messages.Home')); ?></a></li>
                    <?php if(count($categoryLevelGet) > 0): ?>
                    <?php $__currentLoopData = $categoryLevelGet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="breadcrumb-item"> 
                        <a class="filter_categories_box" data-cat-id="<?php echo e($level->platform_category_id ?? ''); ?>" href="javascript:void(0)"><?php echo e($level->categoryDescriptions->name ?? ''); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo e(trans('messages.all_product')); ?></a></li>
                    <?php endif; ?>
                </ol>
            </nav>

            <div class="sortbyCard">
                <div onclick="openNav()" class="sideTabicon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.15 14C4.31667 13.5 4.61667 13.1 5.05 12.8C5.48333 12.4889 5.96667 12.3333 6.5 12.3333C7.03333 12.3333 7.51667 12.4889 7.95 12.8C8.38333 13.1 8.68889 13.5 8.86667 14H17.3333V15.6667H8.86667C8.68889 16.1667 8.38333 16.5722 7.95 16.8833C7.51667 17.1833 7.03333 17.3333 6.5 17.3333C5.96667 17.3333 5.48333 17.1833 5.05 16.8833C4.61667 16.5722 4.31667 16.1667 4.15 15.6667H0.666667V14H4.15ZM9.15 8.16667C9.31667 7.66667 9.61667 7.26667 10.05 6.96667C10.4833 6.65556 10.9667 6.5 11.5 6.5C12.0333 6.5 12.5167 6.65556 12.95 6.96667C13.3833 7.26667 13.6889 7.66667 13.8667 8.16667H17.3333V9.83333H13.85C13.6833 10.3333 13.3833 10.7389 12.95 11.05C12.5167 11.35 12.0333 11.5 11.5 11.5C10.9667 11.5 10.4833 11.35 10.05 11.05C9.61667 10.7389 9.31111 10.3333 9.13333 9.83333H0.666667V8.16667H9.15ZM4.15 2.33333C4.31667 1.83333 4.61667 1.43333 5.05 1.13333C5.48333 0.822222 5.96667 0.666666 6.5 0.666666C7.03333 0.666666 7.51667 0.822222 7.95 1.13333C8.38333 1.43333 8.68889 1.83333 8.86667 2.33333H17.3333V4H8.86667C8.68889 4.5 8.38333 4.90556 7.95 5.21667C7.51667 5.51667 7.03333 5.66667 6.5 5.66667C5.96667 5.66667 5.48333 5.51667 5.05 5.21667C4.61667 4.90556 4.31667 4.5 4.15 4H0.666667V2.33333H4.15Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div class="sorting-box">
                    <label for="inputEmail3" class="col-form-label"><?php echo e(trans('messages.sort_by')); ?>:</label>
                    <div class="col-form-select">
                        <div class="form-group mb-0">
                            <select class="form-select sort_bySelected" aria-label="Default select ">
                                <option value=""><?php echo e(trans('messages.sort_by')); ?></option>
                                <option value="low_to_high" <?php echo e(isset($searchVariable['sort_by']) && $searchVariable['sort_by'] == "low_to_high"  ? 'selected' : ''); ?>><?php echo e(trans('messages.price_low to high')); ?></option>
                                <option value="high_to_low" <?php echo e(isset($searchVariable['sort_by']) && $searchVariable['sort_by'] == "high_to_low"  ? 'selected' : ''); ?>><?php echo e(trans('messages.price_high_to_low')); ?></option>
                                <option value="A_Z" <?php echo e(isset($searchVariable['sort_by']) && $searchVariable['sort_by'] == "A_Z"  ? 'selected' : ''); ?>><?php echo e(trans('messages.A_Z')); ?></option>
                                <option value="Z_A" <?php echo e(isset($searchVariable['sort_by']) && $searchVariable['sort_by'] == "Z_A"  ? 'selected' : ''); ?>><?php echo e(trans('messages.Z_A')); ?></option>
                                <option value="newest" <?php echo e(isset($searchVariable['sort_by']) && $searchVariable['sort_by'] == "newest"  ? 'selected' : ''); ?>><?php echo e(trans('messages.newest')); ?></option>
                                <option value="recommended" <?php echo e(isset($searchVariable['sort_by']) && $searchVariable['sort_by'] == "recommended"  ? 'selected' : ''); ?>><?php echo e(trans('messages.recommended')); ?></option>
                                <option value="most_popular" <?php echo e(isset($searchVariable['sort_by']) && $searchVariable['sort_by'] == "most_popular"  ? 'selected' : ''); ?>><?php echo e(trans('messages.most_popular')); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<section class="product_listing_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 custom_filter01">
                <form action="" method="get" id="searchFilterFormOnProduct">
                    <input type="hidden" id="sort_by" name="sort_by" value="<?php echo e(isset($searchVariable['sort_by']) ? $searchVariable['sort_by'] : ''); ?>">
                    <input type="hidden" name="catId" id="categoryId" value="<?php echo e(isset($searchVariable['catId']) ? $searchVariable['catId'] : ''); ?>">
                    <input type="hidden" name="title" value="<?php echo e(isset($searchVariable['title']) ? $searchVariable['title'] : ''); ?>">
                    <input type="hidden" id="brandSelectGet" name="brandId" value="<?php echo e(isset($searchVariable['brandId']) ? $searchVariable['brandId'] : ''); ?>">
                    <input type="hidden" id="pricesGet" value="<?php echo e(isset($searchVariable['price']) ? $searchVariable['price'] : ''); ?>" name="price">
                    <?php 
                        $minPriceFilter = (isset($searchVariable['price']) ? explode(';',$searchVariable['price'])[0] : 0);
                        $minPriceFilter = str_replace(" ",'',$minPriceFilter);
                        $maxPriceFilter = (isset($searchVariable['price']) ? explode(';',$searchVariable['price'])[1] : 0);
                        $maxPriceFilter = str_replace(" ",'',$maxPriceFilter);
                    ?>
                    <div id="portfolioDisc" class="product_filter_wrapper">
                        <a href="javascript:void(0)" onclick="closeNav()" class="closebtn"><i class="fas fa-times"></i></a>
                        <?php if(@$subCategory && count($subCategory) > 0 ): ?>
                        <div class="filter_Box">
                            <h3 class="product_filter_head"><?php echo e(trans('messages.Categories')); ?></h3>
                            <div class="check_item_box">
                                <?php $__currentLoopData = $subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="filter_categories_box" data-cat-id="<?php echo e($cat->platform_category_id ?? ''); ?>" href="<?php echo e(url()->current()); ?>?catId=<?php echo e($cat->platform_category_id ?? ''); ?>"><?php echo e($cat->categoryDescriptions->name ?? ''); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php $brandId = isset($searchVariable['brandId']) ? explode(",",$searchVariable['brandId']) : []; ?>
                        <?php if(@$productBrand && count($productBrand) > 0 ): ?>
                        <div class="filter_Box">
                            <h3 class="product_filter_head">Brand</h3>
                            <div class="check_item_box">
                                <?php $__currentLoopData = $productBrand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check">
                                    <input <?php echo e(in_array($brand->id,$brandId) ? 'checked' : ''); ?> class="form-check-input brandSelect" type="checkbox" value="<?php echo e($brand->id ?? ''); ?>" id="brandCheck0<?php echo e($brand->id ?? ''); ?>">
                                    <label class="form-check-label brandSelectFilter" data-brand-id="<?php echo e($brand->id ?? ''); ?>" for="brandCheck0<?php echo e($brand->id ?? ''); ?>">
                                        <?php echo e($brand->brand_name ?? ''); ?>

                                    </label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="filter_Box">
                            <h3 class="product_filter_head m-0"><?php echo e(trans('messages.price_range')); ?></h3>
                            <div class="range_slider_block ">
                                <div class="pf-Bx">
                                    <div class="pf-inbx">
                                        <div class="budget-slider">
                                            <input type="text" id="budget_slider4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter_Box">
                            <h3 class="product_filter_head"><?php echo e(trans('messages.rating')); ?><span></span></h3>
                            <div class="check_item_box">
                                <div class="form-check">
                                    <input class="form-check-input ratingSelectd" type="radio" <?php echo e(isset($searchVariable['ratings']) && @$searchVariable['ratings'] == '4' ? 'checked' : '4'); ?> name="ratings" value="4" id="ratingbox2202">
                                    <label class="form-check-label" for="ratingbox2202">
                                        <div class="ratings_filter">
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <p>4 <?php echo e(trans('messages.points_or_more')); ?></p>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input ratingSelectd" type="radio" <?php echo e(isset($searchVariable['ratings']) && @$searchVariable['ratings'] == '3' ? 'checked' : '3'); ?> name="ratings" value="3" id="ratingbox2203">
                                    <label class="form-check-label" for="ratingbox2203">
                                        <div class="ratings_filter">
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <p>3 <?php echo e(trans('messages.points_or_more')); ?></p>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input ratingSelectd" type="radio" <?php echo e(isset($searchVariable['ratings']) && @$searchVariable['ratings'] == '2' ? 'checked' : '2'); ?> name="ratings" value="2" id="ratingbox2204">
                                    <label class="form-check-label" for="ratingbox2204">
                                        <div class="ratings_filter">
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <p>2 <?php echo e(trans('messages.points_or_more')); ?></p>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input ratingSelectd" type="radio" <?php echo e(isset($searchVariable['ratings']) && @$searchVariable['ratings'] == '1' ? 'checked' : '1'); ?> name="ratings" value="1" id="ratingbox2205">
                                    <label class="form-check-label" for="ratingbox2205">
                                        <div class="ratings_filter">
                                            <svg width="18" height="18" viewBox="0 0 10 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <p>1 <?php echo e(trans('messages.points_or_more')); ?></p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-9 col-md-12 custom_product02">
                <div class="product_list_cards">
                    <div class="row gx-0 appendItems">
                        <?php if(count($results) > 0): ?>
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6  card_borderBt">
                            <div class="proLink">
                                <div class="product-case">
                                    <figure>
                                        <a href="<?php echo e(url('/')); ?>/<?php echo e(session()->get('siteUrl')); ?>/product/<?php echo e($product->platform_product_id); ?>"><img src="<?php echo e($product->system_image ?? $product->image); ?>" alt=""></a>
                                    </figure>
                                    <div class="proData">
                                        <h3 class="product_title"><a href="<?php echo e(url('/')); ?>/<?php echo e(session()->get('siteUrl')); ?>/product/<?php echo e($product->platform_product_id); ?>"><?php echo e($product->productDescriptions->name ?? ''); ?></a></h3>
                                        <div class="like-this"><i class="fas fa-heart <?php echo e(UsersData() == '' ? 'NotLogin' : ''); ?> <?php echo e($product->productWishlist ? 'wishlist' : ''); ?> wishlistProduct" data-product-id="<?php echo e($product->id ?? ''); ?>"></i></div>
                                        <div class="prices"><span><?php echo e($product->price_currency ?? ''); ?> <?php echo e(number_format($product->price)); ?></span> (<?php echo e(UsersData()->currency ?? Session::get('currencylocale')); ?> <?php echo e(convertCurrency($product->price,UsersData()->currency ?? Session::get('currencylocale'))); ?>)</div>
                                        <div class="ratings">
                                            <?php
                                            $last=0;
                                            $ratingAveragePercentage = $product->ratingAveragePercentage >5 ? 5.0 : $product->ratingAveragePercentage;
                                            ?>
                                            <?php for($i=1;$i<=5;$i++): ?>
                                                <?php if($i<=$ratingAveragePercentage): ?>
                                                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.02881 3.17141L6.22902 2.91174L5.11687 0.329226C5.039 0.148396 4.78261 0.148396 4.70475 0.329226L3.5926 2.91175L0.792814 3.17141C0.596773 3.18959 0.517543 3.43343 0.665451 3.56335L2.7779 5.41912L2.1597 8.16214C2.11641 8.35419 2.32383 8.50489 2.49311 8.40437L4.91081 6.96877L7.32852 8.40437C7.4978 8.50489 7.70524 8.35419 7.66195 8.16214L7.04373 5.41912L9.15618 3.56335C9.30408 3.43343 9.22485 3.18959 9.02881 3.17141Z"
                                                        fill="#FFDC64">
                                                    </path>
                                                </svg>
                                                <?php elseif($ratingAveragePercentage<$i && $ratingAveragePercentage>$last): ?>
                                                <svg width="10" height="9" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
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
                                            (<?php echo e($product->ratingCount ?? '0'); ?>)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="no_record text-center mt-5">
                            <img src="<?php echo e(asset('public/frontend/img/no-record-found.svg')); ?>" alt="no record">
                             <h6>Not record found</h6>
                        </div>
                        <?php endif; ?>
                    </div>
                    <input type="hidden" id="artical_count" value="<?php echo e(@$results->total()); ?>">
                    <input type="hidden" id="urls" value="<?php echo e(url()->full()); ?>&page=">
                    <input type="hidden" id="looder_count" value="<?php echo e(@count($results)); ?>">
                    <?php if(@count($results) < @$results->total()): ?>
                    <div class="text-center hidden">
                        <input type="hidden" id="counter" value="2">
                        <a href="javascript:void(0);" class="seemore-btn" onclick="loadMore()">Show More</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <?php echo $service ?? ''; ?>


<?php $__env->startSection("js"); ?>
<script>

$(function () {
    $('.product_title').matchHeight({ byRow: false });
        $('.prices').matchHeight({ byRow: false });
    });
    
    $('.sort_bySelected').on("change",function(){
        $('#sort_by').val(this.value);
        $('#searchFilterFormOnProduct').submit();
    });
    // Sidebar fix
    $(document).ready(function () {            
        $("#budget_slider4").ionRangeSlider({
            type: "double",
            grid: false,
            min: "<?php echo e($minPrice); ?>",
            max: "<?php echo e($maxPrice); ?>",
            from: "<?php echo e($minPriceFilter); ?>",
            to: "<?php echo e($maxPriceFilter != 0 ? $maxPriceFilter : $maxPrice); ?>",
            onChange: function (data) {
                $('#pricesGet').val(data.from_pretty+";"+data.to_pretty);
                $('#searchFilterFormOnProduct').submit();
            },
            postfix: " <?php echo e(UsersData()->currency ?? Session::get('currencylocale')); ?>"
        });
    })


    function openNav() {
        document.querySelector('body').classList.add("scroll-off");
        document.getElementById("portfolioDisc").classList.add("showBar");
    }
    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.querySelector('body').classList.remove("scroll-off");
        document.getElementById("portfolioDisc").classList.remove("showBar");
    }

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
                // if(data.total == data.skipCount){
                //    $('.seemore-btn').hide();
                // }
                var skip           = $('#looder_count').val();
                $('#looder_count').val(parseInt(skip)+data.skipCount);
                if(parseInt($('#artical_count').val()) <= parseInt($('#looder_count').val())){
                   $('.seemore-btn').hide();
                }
                $('.loader-wrapper').hide();
                $('.appendItems').append(data.html);
                $('#counter').val( function(i, oldval) {
                    return parseInt( oldval, 10) + 1;
                });
            }
        })
        page + 1;
    }

    $('.filter_categories_box').click(function(){
        $('#categoryId').val($(this).data('cat-id'));
        $('#searchFilterFormOnProduct').submit();
    });

    $('.ratingSelectd').click(function(){
        $('#searchFilterFormOnProduct').submit();
    });

    $('#budget_slider4').click(function(){
        $('#searchFilterFormOnProduct').submit();
    })

    var selectedmy    = $('#brandSelectGet').val() ?? '';
    var selectedmy    = selectedmy != '' ? selectedmy.split(",") : [];
    var selectedarray = selectedmy.length > 0 ? selectedmy : [];
    $('.brandSelect').on("click",function(){
        var brandId = $(this).val();
        if($(this).is(':checked')){
            if(selectedarray[brandId] == undefined){
                selectedarray.push(brandId);
            }
        }else{
            selectedarray.splice(selectedarray.indexOf(selectedarray.find(item => selectedarray == brandId)), 1);
        }
        var bard_ids   = selectedarray.join(',');
        $('#brandSelectGet').val(bard_ids);
        $('#searchFilterFormOnProduct').submit();
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/product/product-listing.blade.php ENDPATH**/ ?>