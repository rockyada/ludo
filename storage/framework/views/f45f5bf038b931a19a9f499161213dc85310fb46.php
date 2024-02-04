<!-- Header END -->
<div class="top-section">
    <div class="container">
        <div class="cat-row">
            <ul class="cat-list">
                <li><a href="<?php echo e(route('web.index',['coupang'])); ?>" class="<?php echo e(session()->get('siteUrl') != 'naver' ? 'active' : ''); ?>"><img src="<?php echo e(asset('public/frontend/img/coupanglogo.png')); ?>" alt="menu logo">Coupang</a></li>
                <li><a href="<?php echo e(route('web.index',['naver'])); ?>" class="<?php echo e(session()->get('siteUrl') == 'naver' ? 'active' : ''); ?>"><img src="<?php echo e(asset('public/frontend/img/naver-shoppinglogo.png')); ?>" alt="menu logo" class="whiteLogo">NAVER Shopping</a></li>
                <li><a href="#!"><img src="<?php echo e(asset('public/frontend/img/weverse-shoplogo.png')); ?>" alt="menu logo">Weverse Shop <span class="header_new_tag">NEW</span></a></li>
                <li><a href="#!">K-Pop Fan Items</a></li>
                <li><a href="#!">Purchase Request For Other Websites <span class="header_new_tag">NEW</span></a></li>
            </ul>
            <div class="shop-row">
                <a href="#!" class="shop-btn">Add your shop to our platform</a>
            </div>
        </div>
        <!-- cat-row End -->

        <div class="search-row">
            <div class="search-panel">
                <form action="<?php echo e(url('/')); ?>/<?php echo e(session()->get('siteUrl')); ?>/product" method="get">
                    <div class="search-form-block">
                        <div class="catBox">
                            <select class="form-select" name="catId">
                                <?php if(@$categories && count($categories) >0): ?>
                                <option value=""><?php echo e(trans('messages.Select_Category')); ?></option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->platform_category_id ?? ''); ?>" <?php echo e($cat->platform_category_id == @$_GET['catId'] ? 'selected' : ''); ?>><?php echo e($cat->categoryDescriptions->name ?? ''); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="searchinput">
                            <input type="text" name="title" value="<?php echo e($_GET['title'] ?? ''); ?>" class="form-control" placeholder="Search in your native language / Paste product URL">
                        </div>
                        <button type="submit" class="search-btn"><?php echo e(trans('messages.search')); ?></button>
                    </div>
                </form>
            </div>
            <div class="right-link-panel">
                <ul class="cart-menu">
                    <li>
                        <a href="#!">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.65036 2.25101L11.24 3.25794L3.5086 6.26422L0.799969 5.21098L8.41255 2.25101C8.492 2.22004 8.57083 2.22004 8.65036 2.25101ZM16.7142 10.8977C18.8887 10.8977 20.6514 12.6605 20.6514 14.835C20.6514 17.0095 18.8886 18.7723 16.7142 18.7723C14.5398 18.7723 12.7769 17.0095 12.7769 14.835C12.7769 12.6605 14.5397 10.8977 16.7142 10.8977ZM18.205 13.0395L15.8726 15.3718L15.0768 14.3702C14.881 14.1239 14.5226 14.083 14.2763 14.2788C14.03 14.4745 13.989 14.8329 14.1848 15.0792L15.3562 16.5532C15.5587 16.8433 15.9758 16.883 16.2281 16.6306L19.0121 13.8466C19.235 13.6237 19.235 13.2624 19.0121 13.0395C18.7892 12.8166 18.4279 12.8166 18.205 13.0395ZM14.0052 4.33317C11.4281 5.33534 8.85105 6.33748 6.27379 7.33941L8.53141 8.21722L16.2629 5.21098L14.0052 4.33317ZM16.7142 5.7373L8.85954 8.79144V17.8892L12.432 16.5001C12.2311 15.9839 12.1207 15.4224 12.1207 14.835C12.1207 12.2981 14.1773 10.2415 16.7142 10.2415V5.7373ZM8.20329 17.8891V8.79144L5.82262 7.8658V9.78689C5.82262 9.87975 5.71413 9.92987 5.6435 9.86966L4.38002 8.79358L3.1984 9.16103C3.12806 9.18294 3.05739 9.13093 3.05739 9.05731V6.79058L0.348633 5.73734V14.6105C0.348633 14.7486 0.429229 14.8663 0.557977 14.9164L8.20329 17.8891Z"
                                    fill="currentColor" />
                            </svg>
                            <?php echo e(trans('messages.My_Orders')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.29989 16.7997C5.14491 16.7997 4.21043 17.7447 4.21043 18.8997C4.21043 20.0546 5.14491 20.9996 6.29989 20.9996C7.45487 20.9996 8.39985 20.0546 8.39985 18.8997C8.39985 17.7447 7.45487 16.7997 6.29989 16.7997ZM0 1.04998C0 1.62747 0.472492 2.09996 1.04998 2.09996H2.09996L5.8799 10.0693L4.46242 12.6313C3.69593 14.0383 4.70392 15.7497 6.29989 15.7497H17.8497C18.4272 15.7497 18.8997 15.2772 18.8997 14.6997C18.8997 14.1223 18.4272 13.6498 17.8497 13.6498H6.29989L7.45487 11.5498H15.2772C16.0647 11.5498 16.7577 11.1193 17.1147 10.4683L20.8736 3.65394C21.2621 2.96095 20.7581 2.09996 19.9601 2.09996H4.42042L3.71693 0.598489C3.54894 0.230996 3.17094 0 2.77195 0H1.04998C0.472492 0 0 0.472492 0 1.04998ZM16.7997 16.7997C15.6447 16.7997 14.7102 17.7447 14.7102 18.8997C14.7102 20.0546 15.6447 20.9996 16.7997 20.9996C17.9547 20.9996 18.8997 20.0546 18.8997 18.8997C18.8997 17.7447 17.9547 16.7997 16.7997 16.7997Z"
                                    fill="currentColor" />
                            </svg>

                            <?php echo e(trans('messages.My_Cart')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.65036 2.25101L11.24 3.25794L3.5086 6.26422L0.799969 5.21098L8.41255 2.25101C8.492 2.22004 8.57083 2.22004 8.65036 2.25101ZM16.7142 10.8977C18.8887 10.8977 20.6514 12.6605 20.6514 14.835C20.6514 17.0095 18.8886 18.7723 16.7142 18.7723C14.5398 18.7723 12.7769 17.0095 12.7769 14.835C12.7769 12.6605 14.5397 10.8977 16.7142 10.8977ZM18.205 13.0395L15.8726 15.3718L15.0768 14.3702C14.881 14.1239 14.5226 14.083 14.2763 14.2788C14.03 14.4745 13.989 14.8329 14.1848 15.0792L15.3562 16.5532C15.5587 16.8433 15.9758 16.883 16.2281 16.6306L19.0121 13.8466C19.235 13.6237 19.235 13.2624 19.0121 13.0395C18.7892 12.8166 18.4279 12.8166 18.205 13.0395ZM14.0052 4.33317C11.4281 5.33534 8.85105 6.33748 6.27379 7.33941L8.53141 8.21722L16.2629 5.21098L14.0052 4.33317ZM16.7142 5.7373L8.85954 8.79144V17.8892L12.432 16.5001C12.2311 15.9839 12.1207 15.4224 12.1207 14.835C12.1207 12.2981 14.1773 10.2415 16.7142 10.2415V5.7373ZM8.20329 17.8891V8.79144L5.82262 7.8658V9.78689C5.82262 9.87975 5.71413 9.92987 5.6435 9.86966L4.38002 8.79358L3.1984 9.16103C3.12806 9.18294 3.05739 9.13093 3.05739 9.05731V6.79058L0.348633 5.73734V14.6105C0.348633 14.7486 0.429229 14.8663 0.557977 14.9164L8.20329 17.8891Z"
                                    fill="currentColor" />
                            </svg>
                            <?php echo e(trans('messages.My_Page')); ?>   
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- search-row END -->
    <div class="office-time">
        Business Hours: 9.00 - 17.30 (Monday-Friday) in all our branch offices<br>
        Seoul 12:28:23 | Guangzhou 21:27:37 | Tokyo 13:28:29 |  Los Angeles 12:28:45
        </div>

    </div>
</div><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/components/filter-header.blade.php ENDPATH**/ ?>