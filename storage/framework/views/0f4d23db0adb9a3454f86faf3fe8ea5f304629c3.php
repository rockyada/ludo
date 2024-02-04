<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo e(Config("Site.title")); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?php echo e(asset('public/admin/css/login.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/admin/css/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/admin/css/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/admin/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/admin/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/admin/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/admin/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/admin/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo e(asset('public/admin/img/favicon.ico')); ?>" />
    <script src="<?php echo e(asset('public/admin/js/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/prismjs.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/sweetalert2.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/scripts.bundle.js')); ?>"></script>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <script type="text/javascript">
        function show_message(message, message_type) {
            Swal.fire({
                position: "top-right",
                icon: message_type,
                title: message,
                showConfirmButton: false,
                timer: 8000
            });
        }
    </script>
    <?php if(Session::has('error')): ?>
    <script type="text/javascript">
        $(document).ready(function(e) {

            show_message("<?php echo e(Session::get('error')); ?>", 'error');
        });
    </script>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
    <script type="text/javascript">
        $(document).ready(function(e) {
            show_message("<?php echo e(Session::get('success')); ?>", 'success');
        });
    </script>
    <?php endif; ?>
    <?php if(Session::has('flash_notice')): ?>
    <script type="text/javascript">
        $(document).ready(function(e) {
            show_message("<?php echo e(Session::get('flash_notice')); ?>", 'success');
        });
    </script>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/layouts/login_layout.blade.php ENDPATH**/ ?>