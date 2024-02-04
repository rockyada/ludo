<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent("title"); ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('public/frontend/img/favicon/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('public/frontend/img/favicon/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('public/frontend/img/favicon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('public/frontend/img/favicon/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('public/frontend/img/favicon/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('public/frontend/img/favicon/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('public/frontend/img/favicon/ms-icon-144x144.png')); ?>">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5.2.3 CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/css/bootstrap.min.css')); ?>">
    <!--  Font-Awesome-5 CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/css/ion.rangeSlider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/font-awesome.css')); ?>">
    <!-- Swiper 8.1.5 -->
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/swiper-bundle.min.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/css/style.css')); ?>">
    <!-- Custom Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/css/responsive.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/custom/custom.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.6/css/intlTelInput.css" integrity="sha512-Ky9SFgkYYIAWfFbsz+Tvrs+kpW7mgyQu+glUEnVV60+nxDPe64w0CrYRSMKsmTwJtN2jXNmU5SBgcyzKOwsn3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />


    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='<?php echo e(config("Tawk.io")); ?>';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
</head>
    
    <?php echo $__env->yieldContent("style"); ?>

    <?php 
        $segment2    =    Request()->segment(1);
        $segment3    =    Request()->segment(2);
        $segment4    =    Request()->segment(3);
        $segment5    =    Request()->segment(4);

        $arr = ['login','signup','otp-verify','forgot-password','reset-password']; 
        $arr2 = []; 
    ?>

<body>

    <!-- loader  -->
    <div class="loader-wrapper" style="display: none;">
        <div class="loader">
            <img src="<?php echo e(asset('public/frontend/img/loader-logo.png')); ?>" alt="">
        </div>
    </div>

    <?php if(in_array($segment2,$arr)): ?>
    <?php else: ?> 
    <?php echo $__env->make('frontend.elements.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php echo $__env->yieldContent("content"); ?>

    <?php if(in_array($segment2,$arr)): ?>
    <?php else: ?> 
    <?php echo $__env->make('frontend.elements.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <script type="text/javascript">var url    = "<?php echo e(url('/')); ?>"; var _token = "<?php echo e(csrf_token()); ?>";</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap v5.2.3  -->
    <script type="text/javascript" src="<?php echo e(asset('public/custom/intlTelInput-jquery.min.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Swiper 8.1.5 -->
    <script src="<?php echo e(asset('public/frontend/js/theia-sticky-sidebar.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/jquery.matchHeight-min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/script.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
    <script src="<?php echo e(asset('public/frontend/js/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/custom/custom-js.js')); ?>"></script>
    
    <script>

        //more payment cards
        $('.moreless-button').click(function () {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "+ 15 more") {
                $(this).text("+ 15 less")
            } else {
                $(this).text("+ 15 more")
            }
        });

        // Match height
        $(function () {
            $('.pro-title').matchHeight({ byRow: false });
            $('.prices').matchHeight({ byRow: false });
        });

        // Load more script
        $('#show-more-content').hide();
        $('#show-more').click(function () {
            $('#show-more-content').show(0);
            $('#show-less').show();
            $('#show-more').hide();
        });

        $('#show-less').click(function () {
            $('#show-more-content').hide(0);
            $('#show-more').show();
            $(this).hide();
        });

        var swiper = new Swiper(".hero-swiper", {
            spaceBetween: 0,
            speed: 1000,
            // effect: 'fade',
            slidesPerView: 1,
            loop: false,
            navigation: {
                nextEl: ".hero-nav .swiper-button-next",
                prevEl: ".hero-nav .swiper-button-prev",
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: ".hero-paging.swiper-pagination",
                clickable: true,
            },
        });


        var swiper = new Swiper(".recommend-swiper", {
            spaceBetween: 2,
            speed: 1000,
            loop: false,
            autoplay: false,
            pagination: {
                el: ".rec-paging.swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".rec-nav .swiper-button-next",
                prevEl: ".rec-nav .swiper-button-prev"
            },
            // autoplay: {
            //     delay: 4000,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 2,
                },
                575: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });



        var swiper = new Swiper(".feedback-swiper", {
            spaceBetween: 20,
            speed: 1000,
            loop: false,
            autoplay: false,
            pagination: {
                el: ".feeds-paging.swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            // autoplay: {
            //     delay: 4000,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                575: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });
    </script>

    <script>

        var swiper = new Swiper(".productDetailsSwiper", {
            spaceBetween: 15,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            breakpoints: {
                0: {
                    slidesPerView: 4,
                },
                480: {
                    slidesPerView: 5,
                },
                575: {
                    slidesPerView: 5,
                },
                767: {
                    slidesPerView: 6,
                },
                991: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },

        });
        var swiper2 = new Swiper(".productDetailsSwiper02", {
            spaceBetween: 30,
            pagination: {
                el: ".hero-pagingproDea.swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".productDetailstop .swiper-button-next",
                prevEl: ".productDetailstop .swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
        var swiper = new Swiper(".recentSearch-swiper", {
            spaceBetween: 20,
            slidesPerView: 5,
            loop: true,
            navigation: {
                nextEl: ".recentSearch_next .swiper-button-next",
                prevEl: ".recentSearch_next .swiper-button-prev",
            },
            pagination: {
                el: ".hero-recentSear.swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 2,
                },
                575: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
        var swiper = new Swiper(".RelatedPro-swiper", {
            spaceBetween: 20,
            slidesPerView: 5,
            loop: true,
            navigation: {
                nextEl: ".Relatednext-nav .swiper-button-next",
                prevEl: ".Relatednext-nav .swiper-button-prev",
            },
            pagination: {
                el: ".hero-relatedned.swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 2,
                },
                575: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
        var swiper = new Swiper(".subcateSwiper", {
            spaceBetween: 0,
            loop: true,
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
            // pagination: {
            //     el: ".hero-relatedned.swiper-pagination",
            //     clickable: true,
            // },
        });

    </script>

    
    <?php echo $__env->yieldContent("js"); ?>
</body>

</html>
<?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/layouts/default.blade.php ENDPATH**/ ?>