<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php if(isset($pageTitle)): ?>
  <title>OneScan - <?php echo e($pageTitle); ?></title>
  <?php else: ?>
  <title>OneScan</title>
  <?php endif; ?>

  <link href="<?php echo e(asset('assets/img/logo.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('assets/img/logo.png')); ?>" rel="apple-touch-icon">

    <link rel="stylesheet" href="<?php echo e(asset('user_assets/css/animate-3.7.0.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user_assets/css/font-awesome-4.7.0.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user_assets/css/bootstrap-4.1.3.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user_assets/css/owl-carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user_assets/css/jquery.datetimepicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user_assets/css/linearicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user_assets/css/style.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
    <?php echo $__env->make('common.userNavBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('errnotify.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('section'); ?>

    <!-- News Area Starts -->
    
    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">Top Services</h3>
                            <ul>
                                <li class="mb-2"><a href="#"> Services 1</a></li>
                                <li class="mb-2"><a href="#"> Services 2</a></li>
                                <li class="mb-2"><a href="#"> Services 3</a></li>
                                <li><a href="#"> Services 4</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <?php echo $__env->yieldPushContent('script'); ?>
    <script src="user_assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="user_assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="user_assets/js/vendor/wow.min.js"></script>
    <script src="user_assets/js/vendor/owl-carousel.min.js"></script>
    <script src="user_assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="user_assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="user_assets/js/vendor/superfish.min.js"></script>
    <script src="user_assets/js/main.js"></script>

</body>
</html>
<?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/Layouts/user.blade.php ENDPATH**/ ?>