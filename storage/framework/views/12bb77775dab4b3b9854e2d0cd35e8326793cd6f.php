<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>
    <div class="seach-category-section">
        <div class="container">
            <div class="row">
                <?php if(@count($banners) > 0): ?>
                <div class="col-md-12 col-lg-8 col-slider order-lg-2">
                    <div class="hero-wrapper swipe-arrow-style">
                        <div class="swiper hero-swiper">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="<?php echo e($banner); ?>" alt="">
                                    </figure>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="hero-nav">
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
                        <div class="hero-paging swiper-pagination"></div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-md-12 col-lg-4 col-cat">
                    <div class="category-wrapper">
                        <div class="catTitle"><?php echo e(trans('messages.search_by_categories')); ?></div>
                        <div class="category-listings">
                            <ul>
                                <?php if(@$categories && count($categories) >0): ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('/')); ?>/<?php echo e(siteSlugUrl(collect(request()->segments())->last()).'/product?catId='.$cat->platform_category_id); ?>"><?php echo e($cat->categoryDescriptions->name ?? ''); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                Category Not Available
                                <?php endif; ?>
                            </ul>

                            <!-- <div id="show-more">
                                <a href="javascript:void(0)" class="load-more-cats">All category <i
                                        class="far fa-angle-down"></i></a>
                            </div>

                            <div id="show-more-content">
                                <ul>
                                    <li><a href="#!">BTS</a></li>
                                    <li><a href="#!">BlackPink</a></li>
                                    <li><a href="#!">LE SSERAFIM</a></li>
                                    <li><a href="#!">HWANG MIN HYUN</a></li>
                                    <li><a href="#!">PRIKIL</a></li>
                                    <li><a href="#!">TOMORROW X TOGETHER</a></li>
                                    <li><a href="#!">SEVENTEEN</a></li>
                                    <li><a href="#!">BAEKHO(KANG DONG HO)</a></li>
                                    <li><a href="#!">ENHYPEN</a></li>
                                    <li><a href="#!">NewJeans</a></li>
                                    <li><a href="#!">&TEAM</a></li>
                                    <li><a href="#!">TREASURE</a></li>
                                </ul>
                                <div id="show-less"><a href="javascript:void(0)" class="load-more-cats">Less all
                                        category <i class="far fa-angle-up"></i></a>
                                </div>
                            </div> -->
                            <!-- <a href="#!" class="load-more-cats">Load more</a> -->
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- seach-category-section END -->

    <section class="feedback-wrapper">
        <div class="container">
            <h2 class="section-title">
                Feedbacks About Platform
            </h2>
            <div class="feedback-row">
                <div class="swiper feedback-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="feedback-block">
                                <div class="feeds-header">
                                    <figure>
                                        <img src="<?php echo e(asset('public/frontend/img/user2.png')); ?>" alt="">
                                    </figure>
                                    <div class="feed-title">
                                        <div class="feed-author">Savannah Nguyen</div>
                                        <div class="feed-type">Verified Buyer</div>
                                    </div>
                                    <div class="feed-rating">
                                        4.5 <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.33371 0.11792L8.06767 4.23179L12.3252 4.71106L9.1375 7.7152L10.0193 12.1179L6.31544 9.86055L2.60295 12.1026L3.50142 7.70322L0.325195 4.68602L4.58425 4.22449L6.33371 0.11792Z"
                                                fill="#FFB400" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="feed-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, </p>
                                </div>
                                <div class="feed-date">Nov 09, 2022</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="feedback-block">
                                <div class="feeds-header">
                                    <figure>
                                        <img src="<?php echo e(asset('public/frontend/img/user2.png')); ?>" alt="">
                                    </figure>
                                    <div class="feed-title">
                                        <div class="feed-author">Savannah Nguyen</div>
                                        <div class="feed-type">Verified Buyer</div>
                                    </div>
                                    <div class="feed-rating">
                                        4.5 <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.33371 0.11792L8.06767 4.23179L12.3252 4.71106L9.1375 7.7152L10.0193 12.1179L6.31544 9.86055L2.60295 12.1026L3.50142 7.70322L0.325195 4.68602L4.58425 4.22449L6.33371 0.11792Z"
                                                fill="#FFB400" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="feed-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, </p>
                                </div>
                                <div class="feed-date">Nov 09, 2022</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="feedback-block">
                                <div class="feeds-header">
                                    <figure>
                                        <img src="<?php echo e(asset('public/frontend/img/user2.png')); ?>" alt="">
                                    </figure>
                                    <div class="feed-title">
                                        <div class="feed-author">Savannah Nguyen</div>
                                        <div class="feed-type">Verified Buyer</div>
                                    </div>
                                    <div class="feed-rating">
                                        4.5 <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.33371 0.11792L8.06767 4.23179L12.3252 4.71106L9.1375 7.7152L10.0193 12.1179L6.31544 9.86055L2.60295 12.1026L3.50142 7.70322L0.325195 4.68602L4.58425 4.22449L6.33371 0.11792Z"
                                                fill="#FFB400" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="feed-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, </p>
                                </div>
                                <div class="feed-date">Nov 09, 2022</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="feedback-block">
                                <div class="feeds-header">
                                    <figure>
                                        <img src="<?php echo e(asset('public/frontend/img/user2.png')); ?>" alt="">
                                    </figure>
                                    <div class="feed-title">
                                        <div class="feed-author">Savannah Nguyen</div>
                                        <div class="feed-type">Verified Buyer</div>
                                    </div>
                                    <div class="feed-rating">
                                        4.5 <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.33371 0.11792L8.06767 4.23179L12.3252 4.71106L9.1375 7.7152L10.0193 12.1179L6.31544 9.86055L2.60295 12.1026L3.50142 7.70322L0.325195 4.68602L4.58425 4.22449L6.33371 0.11792Z"
                                                fill="#FFB400" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="feed-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, </p>
                                </div>
                                <div class="feed-date">Nov 09, 2022</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="feedback-block">
                                <div class="feeds-header">
                                    <figure>
                                        <img src="<?php echo e(asset('public/frontend/img/user2.png')); ?>" alt="">
                                    </figure>
                                    <div class="feed-title">
                                        <div class="feed-author">Savannah Nguyen</div>
                                        <div class="feed-type">Verified Buyer</div>
                                    </div>
                                    <div class="feed-rating">
                                        4.5 <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.33371 0.11792L8.06767 4.23179L12.3252 4.71106L9.1375 7.7152L10.0193 12.1179L6.31544 9.86055L2.60295 12.1026L3.50142 7.70322L0.325195 4.68602L4.58425 4.22449L6.33371 0.11792Z"
                                                fill="#FFB400" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="feed-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, </p>
                                </div>
                                <div class="feed-date">Nov 09, 2022</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="feedback-block">
                                <div class="feeds-header">
                                    <figure>
                                        <img src="<?php echo e(asset('public/frontend/img/user2.png')); ?>" alt="">
                                    </figure>
                                    <div class="feed-title">
                                        <div class="feed-author">Savannah Nguyen</div>
                                        <div class="feed-type">Verified Buyer</div>
                                    </div>
                                    <div class="feed-rating">
                                        4.5 <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.33371 0.11792L8.06767 4.23179L12.3252 4.71106L9.1375 7.7152L10.0193 12.1179L6.31544 9.86055L2.60295 12.1026L3.50142 7.70322L0.325195 4.68602L4.58425 4.22449L6.33371 0.11792Z"
                                                fill="#FFB400" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="feed-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, </p>
                                </div>
                                <div class="feed-date">Nov 09, 2022</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="feedback-block">
                                <div class="feeds-header">
                                    <figure>
                                        <img src="<?php echo e(asset('public/frontend/img/user2.png')); ?>" alt="">
                                    </figure>
                                    <div class="feed-title">
                                        <div class="feed-author">Savannah Nguyen</div>
                                        <div class="feed-type">Verified Buyer</div>
                                    </div>
                                    <div class="feed-rating">
                                        4.5 <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.33371 0.11792L8.06767 4.23179L12.3252 4.71106L9.1375 7.7152L10.0193 12.1179L6.31544 9.86055L2.60295 12.1026L3.50142 7.70322L0.325195 4.68602L4.58425 4.22449L6.33371 0.11792Z"
                                                fill="#FFB400" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="feed-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, </p>
                                </div>
                                <div class="feed-date">Nov 09, 2022</div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="feeds-paging swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- feedback-wrapper END -->


    <div class="container">
        <?php echo @$siteDetailsDes->body; ?>

    </div>

    <section class="prodcut-list-wrapper">
        <div class="category-color" style="background-color:#FFA310;">
            <div class="container">
                <div class="readmore">
                    <a href="#!">View More <i class="far fa-chevron-double-right"></i> </a>
                </div>
                <div class="section-head">
                    <h2 class="section-title-new">Top Sales Products This Month</h2>
                    <div class="product-list-flex">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab-01" data-bs-toggle="tab"
                                    data-bs-target="#tab-01-pane" type="button" role="tab" aria-controls="tab-01-pane"
                                    aria-selected="true">K-Pop Items</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-02" data-bs-toggle="tab" data-bs-target="#tab-02-pane"
                                    type="button" role="tab" aria-controls="tab-02-pane" aria-selected="false">Women’s
                                    Fashion</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-03" data-bs-toggle="tab" data-bs-target="#tab-03-pane"
                                    type="button" role="tab" aria-controls="tab-03-pane" aria-selected="false">Men’s
                                    Fashion</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-04-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab-04-tab-pane" type="button" role="tab"
                                    aria-controls="tab-04-tab-pane" aria-selected="false">Bags & Suitcase</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-05-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab-05-tab-pane" type="button" role="tab"
                                    aria-controls="tab-05-tab-pane" aria-selected="false">Fashion Accessories</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-06-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab-06-tab-pane" type="button" role="tab"
                                    aria-controls="tab-06-tab-pane" aria-selected="false">Sport & Outdoors</button>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="subcate-data">
                <div class="subcate-img">
                     <!-- Swiper -->
                      <div class="swiper subcateSwiper">
                        <div class="swiper-wrapper subcate-thumb-">
                          <div class="swiper-slide">
                             <div class="subcate-thumb">
                                <img src="<?php echo e(asset('public/frontend/img/cat-img1.jpg')); ?>" alt="">
                            </div>
                          </div>
                          <div class="swiper-slide">
                             <div class="subcate-thumb">
                                <img src="<?php echo e(asset('public/frontend/img/cat-img1.jpg')); ?>" alt="">
                            </div>
                          </div>
                          <div class="swiper-slide">
                             <div class="subcate-thumb">
                                <img src="<?php echo e(asset('public/frontend/img/cat-img1.jpg')); ?>" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="tab-data">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-01-pane" role="tabpanel" aria-labelledby="tab-01"
                            tabindex="0">
                            <ul class="product-row row">
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>



                            </ul>

                        </div>

                        <div class="tab-pane fade" id="tab-02-pane" role="tabpanel" aria-labelledby="tab-02"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-03-pane" role="tabpanel" aria-labelledby="tab-03"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-04-tab-pane" role="tabpanel" aria-labelledby="tab-04-tab"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-05-tab-pane" role="tabpanel" aria-labelledby="tab-05-tab"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-06-tab-pane" role="tabpanel" aria-labelledby="tab-06-tab"
                            tabindex="0">...</div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prodcut-list-wrapper">
        <div class="category-color" style="background-color:#8965C6;">
            <div class="container">
                <div class="readmore">
                    <a href="#!">View More <i class="far fa-chevron-double-right"></i> </a>
                </div>
                <div class="section-head">
                    <h2 class="section-title-new">K-pop Fan Items Merch & More</h2>
                    <div class="product-list-flex">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab-001" data-bs-toggle="tab"
                                    data-bs-target="#tab-001-pane" type="button" role="tab" aria-controls="tab-001-pane"
                                    aria-selected="true">BTS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-002" data-bs-toggle="tab"
                                    data-bs-target="#tab-002-pane" type="button" role="tab" aria-controls="tab-002-pane"
                                    aria-selected="false"> Blackpin</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-003" data-bs-toggle="tab"
                                    data-bs-target="#tab-003-pane" type="button" role="tab" aria-controls="tab-003-pane"
                                    aria-selected="false">Seventee</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-004-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab-004-tab-pane" type="button" role="tab"
                                    aria-controls="tab-004-tab-pane" aria-selected="false">LE</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-005-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab-005-tab-pane" type="button" role="tab"
                                    aria-controls="tab-005-tab-pane" aria-selected="false">Tomorrow X</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-006-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab-006-tab-pane" type="button" role="tab"
                                    aria-controls="tab-006-tab-pane" aria-selected="false">Enhype</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="subcate-data">
                <div class="subcate-img">
                     <!-- Swiper -->
                      <div class="swiper subcateSwiper">
                        <div class="swiper-wrapper subcate-thumb-">
                          <div class="swiper-slide">
                             <div class="subcate-thumb">
                                <img src="<?php echo e(asset('public/frontend/img/cat-img1.jpg')); ?>" alt="">
                            </div>
                          </div>
                          <div class="swiper-slide">
                             <div class="subcate-thumb">
                                <img src="<?php echo e(asset('public/frontend/img/cat-img1.jpg')); ?>" alt="">
                            </div>
                          </div>
                          <div class="swiper-slide">
                             <div class="subcate-thumb">
                                <img src="<?php echo e(asset('public/frontend/img/cat-img1.jpg')); ?>" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="tab-data">
                    <div class="tab-content" id="myTabContent-2">
                        <div class="tab-pane fade show active" id="tab-001-pane" role="tabpanel"
                            aria-labelledby="tab-001" tabindex="0">
                            <ul class="product-row row">
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <div class="discount-tag">Save 10%</div>
                                            <figure>
                                                <a href="#!"><img src="<?php echo e(asset('public/frontend/img/pro1.png')); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="#!">Gift Item K-pop</a></h3>
                                                <div class="like-this"><i class="fas fa-heart"></i></div>
                                                <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                                    </svg> (245)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="tab-002-pane" role="tabpanel" aria-labelledby="tab-002"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-003-pane" role="tabpanel" aria-labelledby="tab-003"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-004-tab-pane" role="tabpanel" aria-labelledby="tab-004-tab"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-005-tab-pane" role="tabpanel" aria-labelledby="tab-005-tab"
                            tabindex="0">...</div>

                        <div class="tab-pane fade" id="tab-006-tab-pane" role="tabpanel" aria-labelledby="tab-006-tab"
                            tabindex="0">...</div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php if(@$populerCategory && count($populerCategory) > 0): ?>
    <?php $__currentLoopData = $populerCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="prodcut-list-wrapper">
        <div class="category-color" style="background-color:<?php echo e($category->homepage_background_color != '' ? $category->homepage_background_color : '#FFD1D1'); ?>">
            <div class="container">
                <div class="readmore">
                    <a href="<?php echo e(url('/')); ?>/<?php echo e(siteSlugUrl(collect(request()->segments())->last()).'/product?catId='.$category->platform_category_id); ?>"><?php echo e(trans('messages.view_more')); ?><i class="far fa-chevron-double-right"></i> </a>
                </div>
                <div class="section-head">
                    <h2 class="section-title-new"><?php echo e($category->categoryDescriptions->name ?? ''); ?></h2>
                    <div class="product-list-flex">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <?php if(@$category->subcategory): ?>
                            <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo e($keys == 0 ? 'active' : ''); ?>" id="tab-<?php echo e($sub_category->id ?? ''); ?>" data-bs-toggle="tab"
                                    data-bs-target="#tab-<?php echo e($sub_category->id ?? ''); ?>-pane" type="button" role="tab"
                                    aria-controls="tab-<?php echo e($sub_category->id ?? ''); ?>-pane" aria-selected="true"><?php echo e($sub_category->categoryDescriptions->name ?? ''); ?></button>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="subcate-data">
                <div class="subcate-img">
                    <div class="swiper subcateSwiper">
                        <div class="swiper-wrapper subcate-thumb-">
                            <?php $__currentLoopData = $category->categoryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="subcate-thumb">
                                        <img src="<?php echo e($images->category_image ?? ''); ?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-data">
                    <div class="tab-content" id="myTabContent-3">
                        <?php if(@$category->subcategory): ?>
                        <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade show <?php echo e($keys == 0 ? 'active' : ''); ?>" id="tab-<?php echo e($sub_category->id ?? ''); ?>-pane" role="tabpanel"
                            aria-labelledby="tab-0001" tabindex="0">
                            <ul class="product-row row">
                                <?php $__currentLoopData = $sub_category->categoryProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="col-md-2 pro-col">
                                    <div class="proLink">
                                        <div class="product-case">
                                            <!-- <div class="discount-tag">Save 10%</div> -->
                                            <figure>
                                                <a href="<?php echo e(url('/')); ?>/<?php echo e(session()->get('siteUrl')); ?>/product/<?php echo e($product->platform_product_id); ?>"><img src="<?php echo e($product->system_image ?? $product->image); ?>" alt=""></a>
                                            </figure>
                                            <div class="proData">
                                                <h3 class="pro-title"><a href="<?php echo e(url('/')); ?>/<?php echo e(session()->get('siteUrl')); ?>/product/<?php echo e($product->platform_product_id); ?>"><?php echo e($product->productDescriptions->name ?? ''); ?></a></h3>
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
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <section class="latest-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="latest-trends-block trends-bg1">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6">
                                <h2 class="heading-trends">Latest trending</h2>
                                <h3 class="heading-trends-sub">Fast Fashion Styles</h3>
                                <a href="#!" class="more-trends">Learn more</a>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <figure class="trends-img">
                                    <img src="<?php echo e(asset('public/frontend/img/view1.png')); ?>" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="latest-trends-block trends-bg2">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6">
                                <h2 class="heading-trends">Latest trending</h2>
                                <h3 class="heading-trends-sub">Fast Fashion Styles</h3>
                                <a href="#!" class="more-trends">Learn more</a>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <figure class="trends-img">
                                    <img src="<?php echo e(asset('public/frontend/img/view2.png')); ?>" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-wrapper">
        <div class="container">
            <div class="recent-view-block">
                <div class="section-head border-0 justify-content-between">
                    <h2 class="section-title-white">Recently Viewed Products</h2>
                    <div class="readmore">
                        <a href="#!">View More <i class="far fa-chevron-double-right"></i> </a>
                    </div>
                </div>

                <div class="recent-row row">
                    <div class="col-md-2 recent-col">
                        <div class="proLink">
                            <div class="product-case">
                                <!-- <div class="discount-tag">Save 10%</div> -->
                                <figure>
                                    <a href="#!"><img src="<?php echo e(asset('public/frontend/img/image-32.png')); ?>" alt=""></a>
                                </figure>
                                <div class="proData">
                                    <h3 class="pro-title"><a href="#!">Stylish Leather Beg</a></h3>
                                    <!-- <div class="like-this"><i class="fas fa-heart"></i></div> -->
                                    <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                        </svg> (245)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 recent-col">
                        <div class="proLink">
                            <div class="product-case">
                                <!-- <div class="discount-tag">Save 10%</div> -->
                                <figure>
                                    <a href="#!"><img src="<?php echo e(asset('public/frontend/img/image-35.png')); ?>" alt=""></a>
                                </figure>
                                <div class="proData">
                                    <h3 class="pro-title"><a href="#!">Stylish Leather Beg</a></h3>
                                    <!-- <div class="like-this"><i class="fas fa-heart"></i></div> -->
                                    <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                        </svg> (245)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 recent-col">
                        <div class="proLink">
                            <div class="product-case">
                                <!-- <div class="discount-tag">Save 10%</div> -->
                                <figure>
                                    <a href="#!"><img src="<?php echo e(asset('public/frontend/img/image-29.png')); ?>" alt=""></a>
                                </figure>
                                <div class="proData">
                                    <h3 class="pro-title"><a href="#!">Stylish Leather Beg</a></h3>
                                    <!-- <div class="like-this"><i class="fas fa-heart"></i></div> -->
                                    <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                        </svg> (245)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 recent-col">
                        <div class="proLink">
                            <div class="product-case">
                                <!-- <div class="discount-tag">Save 10%</div> -->
                                <figure>
                                    <a href="#!"><img src="<?php echo e(asset('public/frontend/img/image-33.png')); ?>" alt=""></a>
                                </figure>
                                <div class="proData">
                                    <h3 class="pro-title"><a href="#!">Stylish Leather Beg</a></h3>
                                    <!-- <div class="like-this"><i class="fas fa-heart"></i></div> -->
                                    <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                        </svg> (245)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 recent-col">
                        <div class="proLink">
                            <div class="product-case">
                                <!-- <div class="discount-tag">Save 10%</div> -->
                                <figure>
                                    <a href="#!"><img src="<?php echo e(asset('public/frontend/img/image-22.png')); ?>" alt=""></a>
                                </figure>
                                <div class="proData">
                                    <h3 class="pro-title"><a href="#!">Stylish Leather Beg</a></h3>
                                    <!-- <div class="like-this"><i class="fas fa-heart"></i></div> -->
                                    <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                        </svg> (245)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 recent-col">
                        <div class="proLink">
                            <div class="product-case">
                                <!-- <div class="discount-tag">Save 10%</div> -->
                                <figure>
                                    <a href="#!"><img src="<?php echo e(asset('public/frontend/img/image-34.png')); ?>" alt=""></a>
                                </figure>
                                <div class="proData">
                                    <h3 class="pro-title"><a href="#!">Stylish Leather Beg</a></h3>
                                    <!-- <div class="like-this"><i class="fas fa-heart"></i></div> -->
                                    <div class="prices"><span>KRW 5000</span> (US$66.41)</div>
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
                                        </svg> (245)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section>

    <?php echo $service ?? ''; ?>

    
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\Project\resources\views/frontend/index.blade.php ENDPATH**/ ?>