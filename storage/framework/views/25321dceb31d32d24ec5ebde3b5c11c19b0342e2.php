<?php $__env->startSection('title','Your Account'); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbBlock">
	<div class="container">
		<div class="breadcrumbRow">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item"><a href="#"><?php echo e(trans('messages.Home')); ?></a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('messages.Your_Account')); ?></li>
				</ol>
			</nav>                
		</div>
	</div>
</div>

<section class="dashboard">
	<div class="container">
		<div class="row">
			<div class="pageTopTitle col-12">
				<h2 class="RightBlockTitle"><?php echo e(trans('messages.Personal_Information')); ?></h2>
			</div>
			<div class="col-md-12 col-lg-3 col-xl-3 theia-sticky">
				<?php echo $__env->make('frontend.elements.side-setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col-md-12 col-lg-9 col-xl-9 w100MD" id="myProfile">
				<div class="dashboardRightBlock">
					<div class="account_info_page">
						<div class="img_uploaded">
							<div class="account_profile_img">
								<img src="<?php echo e(@UsersData()->image ?  UsersData()->image : asset('public/img/user.png')); ?>" alt="">
							</div>
							<div class="accountInfo mt-2">
								<div class="accInfoList"><span><?php echo e(trans('messages.name')); ?> :</span><?php echo e(UsersData()->name ?? ''); ?></div>
								<div class="accInfoList"><span><?php echo e(trans('messages.Email')); ?> :</span><?php echo e(UsersData()->email ?? ''); ?></div>
							</div>
						</div>
						<div class="membershipInfo borderBox">
							<div class="accountInfo f-20">
								<div class="accInfoList"><span><?php echo e(trans('messages.Membership')); ?> :</span><?php echo e(trans('messages.Legend')); ?> </div>
								<div class="accInfoList m-0"><span><?php echo e(trans('messages.Deposit_Funds_Amount')); ?> :</span> <span class="amount_krw_text"><?php echo e(trans('messages.KRW_1000')); ?> </span></div>
							</div>
						</div>
						<div class="couponsBlock">
							<h4 class="cardThemeTitle"><?php echo e(trans('messages.Coupons')); ?> </h4>
							<div class="row g-4">
								<div class="col-md-6">
									<div class="couponCard">
										<div class="couponLogo">
											<img src="<?php echo e(asset('public/frontend/img/puma_img.png')); ?>" alt="">
										</div>
										<div class="coupon_details_box">
											<p class="offerValue">$ 100 <span class="offtext">Off</span></p>
											<p class="offerType">Puma Shoes</p>
											<p class="coupanValid">Valid until 20 August 2023</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="couponCard">
										<div class="couponLogo">
											<img src="<?php echo e(asset('public/frontend/img/lp_img.png')); ?>" alt="">
										</div>
										<div class="coupon_details_box">
											<p class="offerValue">10% <span class="offtext">Off</span></p>
											<p class="offerType">Louis Philippe</p>
											<p class="coupanValid">Valid until 20 August 2023</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="couponCard">
										<div class="couponLogo">
											<img src="<?php echo e(asset('public/frontend/img/HMlogo.png')); ?>" alt="">
										</div>
										<div class="coupon_details_box">
											<p class="offerValue">$ 50 <span class="offtext">Off</span></p>
											<p class="offerType">H&M</p>
											<p class="coupanValid">Valid until 20 August 2023</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="couponCard">
										<div class="couponLogo">
											<img src="<?php echo e(asset('public/frontend/img/puma_img.png')); ?>" alt="">
										</div>
										<div class="coupon_details_box">
											<p class="offerValue">$ 100 <span class="offtext">Off</span></p>
											<p class="offerType">Puma Shoes</p>
											<p class="coupanValid">Valid until 20 August 2023</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="account_notice_block">
						<h3 class="notice_linkBox_title">Notice from <a href="#!">KoreaEasyBuy.com </a>team</h3>
						<div class="notice_content_box">
							<span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_92_45217)">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M2.47518 11.0619L8.74172 13.6026L20.9376 2.11332C22.2549 0.872399 24.2727 2.59538 23.2536 4.06215L11.0349 21.6548C10.4722 22.4664 9.29203 22.535 8.63071 21.8154L0.87309 13.5188C-0.195707 12.3756 1.03373 10.4776 2.47518 11.0619Z" stroke="#009999" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4.27368 14.0674L9.70331 19.8742L18.3011 7.49512L9.20315 16.0659L4.27368 14.0674Z" fill="#009999"/>
									</g>
									<defs>
										<clipPath id="clip0_92_45217">
											<rect width="24" height="24" fill="white"/>
										</clipPath>
									</defs>
								</svg>

							</span>
							<div class="notice_question_box">
								<h4 class="notice_ques_title">Will help 30 lakh to 40 lakh small businesses onboard</h4>
								<p class="notice_ans_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						</div>
						<div class="notice_content_box">
							<span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_92_45217)">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M2.47518 11.0619L8.74172 13.6026L20.9376 2.11332C22.2549 0.872399 24.2727 2.59538 23.2536 4.06215L11.0349 21.6548C10.4722 22.4664 9.29203 22.535 8.63071 21.8154L0.87309 13.5188C-0.195707 12.3756 1.03373 10.4776 2.47518 11.0619Z" stroke="#009999" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4.27368 14.0674L9.70331 19.8742L18.3011 7.49512L9.20315 16.0659L4.27368 14.0674Z" fill="#009999"/>
									</g>
									<defs>
										<clipPath id="clip0_92_45217">
											<rect width="24" height="24" fill="white"/>
										</clipPath>
									</defs>
								</svg>

							</span>
							<div class="notice_question_box">
								<h4 class="notice_ques_title">Will help 30 lakh to 40 lakh small businesses onboard</h4>
								<p class="notice_ans_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						</div>
						<div class="notice_content_box">
							<span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_92_45217)">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M2.47518 11.0619L8.74172 13.6026L20.9376 2.11332C22.2549 0.872399 24.2727 2.59538 23.2536 4.06215L11.0349 21.6548C10.4722 22.4664 9.29203 22.535 8.63071 21.8154L0.87309 13.5188C-0.195707 12.3756 1.03373 10.4776 2.47518 11.0619Z" stroke="#009999" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4.27368 14.0674L9.70331 19.8742L18.3011 7.49512L9.20315 16.0659L4.27368 14.0674Z" fill="#009999"/>
									</g>
									<defs>
										<clipPath id="clip0_92_45217">
											<rect width="24" height="24" fill="white"/>
										</clipPath>
									</defs>
								</svg>

							</span>
							<div class="notice_question_box">
								<h4 class="notice_ques_title">Will help 30 lakh to 40 lakh small businesses onboard</h4>
								<p class="notice_ans_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>        
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/users/my-account.blade.php ENDPATH**/ ?>