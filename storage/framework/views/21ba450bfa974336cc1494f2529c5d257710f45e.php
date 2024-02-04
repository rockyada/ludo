
<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php echo e(route('web.index')); ?>">
                        <img src="<?php echo e(asset('public/frontend/img/logo.png')); ?>" alt="">
                    </a>
                    <?php if(UsersData() != ''): ?>
                    <div class="nav-item dropdown user_dropdown for_mobile">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="user-drop" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo e(@UsersData()->image ?  UsersData()->image : asset('public/img/user.png')); ?>" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="user-drop">
                            <div class="user_info">
                                <div class="user_name">
                                    <div><?php echo e(UsersData()->name ?? ''); ?></div>
                                    <div class="user_email">
                                        <small><?php echo e(UsersData()->email ?? ''); ?></small>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('users.myAccount')); ?>"><?php echo e(trans('messages.My_Profile')); ?> </a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item scroll <?php echo e(Request::routeIs('users.notifications') ? 'active' : ''); ?>" href="<?php echo e(route('users.notifications')); ?>"><?php echo e(trans('messages.Notification_Center')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Orders')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="<?php echo e(route('product.wishlist')); ?>"><?php echo e(trans('messages.Your_Wishlist')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item <?php echo e(Request::routeIs('users.profile') ? 'active' : ''); ?>" href="<?php echo e(route('users.profile')); ?>"><?php echo e(trans('messages.Login_&_Profile')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Deposit_Funds')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Membership')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Payments')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Addresses')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Language_and_Currency')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Leave_Feedback')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item <?php echo e(Request::routeIs('users.setting') ? 'active' : ''); ?>" href="<?php echo e(route('users.setting')); ?>"><?php echo e(trans('messages.Settings')); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('users.logout')); ?>"><i class="ion-log-out"></i><?php echo e(trans('messages.Logout')); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="overlay" style="display:none"></div>

                    <div class="site-tagline">
                        <?php echo e(trans('messages.Korean_Proxy_Buying_Service_Buy_Anything_from_Korea')); ?>

                    </div>

                    <div class="collapse navbar-collapse">
                        <button class="navbar-toggler menuClose-icon" type="button">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.4 14L0 12.6L5.6 7L0 1.4L1.4 0L7 5.6L12.6 0L14 1.4L8.4 7L14 12.6L12.6 14L7 8.4L1.4 14Z"
                                    fill="black" />
                            </svg>
                        </button>

                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item  d-lg-none">
                                <a class="nav-link" href="#!"><img src="<?php echo e(asset('public/frontend/img/coupanglogo.png')); ?>" alt="menu logo">Coupang</a>
                            </li>
                            <li class="nav-item  d-lg-none">
                                <a class="nav-link" href="#!"><img src="<?php echo e(asset('public/frontend/img/naver-shoppinglogo.png')); ?>" class="whiteLogo" alt="menu logo">NAVER Shopping</a>
                            </li>
                            <li class="nav-item  d-lg-none">
                                <a class="nav-link" href="#!"><img src="<?php echo e(asset('public/frontend/img/weverse-shoplogo.png')); ?>" alt="menu logo">Weverse Shop</a>
                            </li>
                            <li class="nav-item  d-lg-none">
                                <a class="nav-link" href="#!">K-Pop Fan Items</a>
                            </li>
                            <li class="nav-item  d-lg-none">
                                <a class="nav-link" href="#!">Purchase Request For Other Websites</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="<?php echo e(route('web.termsConditions')); ?>"><?php echo e(trans('messages.terms_and_conditions')); ?></a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="<?php echo e(route('web.privacyPolicy')); ?>"><?php echo e(trans('messages.Privacy_and_Cookies_Policy')); ?></a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="<?php echo e(route('web.Faqs')); ?>"><?php echo e(trans('messages.FAQ')); ?></a>
                            </li>
                        </ul>

                        <div class="extra_nav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item langugae_filter currency-filter  for_desktop">
                                    <?php if(@$default_currency): ?>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle nav-link dropdown-toggle lang_drop "
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="flag_ico"><img src="<?php echo e(config('constants.CURRENCY_IMAGE_PATH') . $default_currency->image); ?>" alt=""></span> <?php echo e(ucfirst($default_currency->code)); ?>

                                            <i class="far fa-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu lang_dropdown">
                                            <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currencys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a class="dropdown-item lang_country" href="<?php echo e(route('currencyUpdate', $currencys->code)); ?>">
                                                    <span class="flag_ico">
                                                        <img src="<?php echo e(config('constants.CURRENCY_IMAGE_PATH') . $currencys->image); ?>" alt="">
                                                    </span><?php echo e($currencys->code ?? ''); ?></a>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                </li>
                                <li class="nav-item langugae_filter  for_desktop">
                                    <?php if(@$languages): ?>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle nav-link dropdown-toggle lang_drop"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="flag_ico"><img src="<?php echo e(config('constants.LANGUAGE_IMAGE_PATH') . $default_language->image); ?>" alt=""></span> <?php echo e(ucfirst($default_language->title)); ?>

                                            <i class="far fa-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu lang_dropdown">
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a class="dropdown-item lang_country" href="<?php echo e(route('languageUpdate', $language->lang_code)); ?>">
                                                    <span class="flag_ico">
                                                        <img src="<?php echo e(config('constants.LANGUAGE_IMAGE_PATH') . $language->image); ?>" alt="">
                                                    </span><?php echo e(ucfirst($language->title)); ?></a>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                </li>
                                <?php if(UsersData() == ''): ?>
                                <li>
                                    <a class="sign_up_btn" href="<?php echo e(route('users.signup')); ?>"><?php echo e(trans('messages.Register')); ?></a>
                                </li>
                                <li>
                                    <a class="login_btn" href="<?php echo e(route('users.login')); ?>"><?php echo e(trans('messages.login')); ?></a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <?php if(UsersData() != ''): ?>
                    <div class="nav-item dropdown user_dropdown for_desktop">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="user-drop" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo e(@UsersData()->image ?  UsersData()->image : asset('public/img/user.png')); ?>" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="user-drop">
                            <div class="user_info">
                                <div class="user_name">
                                    <div><?php echo e(UsersData()->name ?? ''); ?></div>
                                    <div class="user_email">
                                        <small><?php echo e(UsersData()->email ?? ''); ?></small>
                                    </div>
                                </div>
                                <ul class="">
                                    <li>
                                        <a href="<?php echo e(route('users.myAccount')); ?>"><?php echo e(trans('messages.My_Profile')); ?> </a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item scroll <?php echo e(Request::routeIs('users.notifications') ? 'active' : ''); ?>" href="<?php echo e(route('users.notifications')); ?>"><?php echo e(trans('messages.Notification_Center')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Orders')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="<?php echo e(route('product.wishlist')); ?>"><?php echo e(trans('messages.Your_Wishlist')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item <?php echo e(Request::routeIs('users.profile') ? 'active' : ''); ?>" href="<?php echo e(route('users.profile')); ?>"><?php echo e(trans('messages.Login_&_Profile')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Deposit_Funds')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Membership')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Payments')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Addresses')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Your_Language_and_Currency')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item" href="javascript:void(0)"><?php echo e(trans('messages.Leave_Feedback')); ?></a>
                                    </li>
                                    <li>
                                        <a class="dashboard-nav-item <?php echo e(Request::routeIs('users.setting') ? 'active' : ''); ?>" href="<?php echo e(route('users.setting')); ?>"><?php echo e(trans('messages.Settings')); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('users.logout')); ?>"><?php echo e(trans('messages.Logout')); ?> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </nav>

                <ul class="extra-links">
                    <li><a href="<?php echo e(route('web.firstTimeUser')); ?>"><?php echo e(trans('messages.First_Time_User')); ?></a></li>
                    <li><a href="<?php echo e(route('web.ourServiceFees')); ?>"><?php echo e(trans('messages.Our_Services_&_Fees')); ?></a></li>
                    <li><a href="<?php echo e(route('web.aboutUs')); ?>"><?php echo e(trans('messages.About_Us')); ?></a></li>
                </ul>
                <div class="for_mobile mobile-link">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item langugae_filter currency-filter">
                            <?php if(@$default_currency): ?>
                            <div class="dropdown">
                                <button class="dropdown-toggle nav-link dropdown-toggle lang_drop "
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="flag_ico"><img src="<?php echo e(config('constants.CURRENCY_IMAGE_PATH') . $default_currency->image); ?>" alt=""></span> <?php echo e(ucfirst($default_currency->code)); ?>

                                    <i class="far fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu lang_dropdown">
                                    <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currencys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a class="dropdown-item lang_country" href="<?php echo e(route('currencyUpdate', $currencys->code)); ?>">
                                            <span class="flag_ico">
                                                <img src="<?php echo e(config('constants.CURRENCY_IMAGE_PATH') . $currencys->image); ?>" alt="">
                                            </span><?php echo e($currencys->code ?? ''); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </li>
                        <li class="nav-item langugae_filter">
                            <?php if(@$languages): ?>
                            <div class="dropdown">
                                <button class="dropdown-toggle nav-link dropdown-toggle lang_drop"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="flag_ico"><img src="<?php echo e(config('constants.LANGUAGE_IMAGE_PATH') . $default_language->image); ?>" alt=""></span> <?php echo e(ucfirst($default_language->title)); ?>

                                    <i class="far fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu lang_dropdown">
                                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a class="dropdown-item lang_country" href="<?php echo e(route('languageUpdate', $language->lang_code)); ?>">
                                            <span class="flag_ico">
                                                <img src="<?php echo e(config('constants.LANGUAGE_IMAGE_PATH') . $language->image); ?>" alt="">
                                            </span><?php echo e(ucfirst($language->title)); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->
<?php echo $__env->make("frontend.components.filter-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/frontend/elements/header.blade.php ENDPATH**/ ?>