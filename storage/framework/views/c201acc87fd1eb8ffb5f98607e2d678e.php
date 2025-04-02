    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> medical@example.com</h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Location</h6>
                    </div>
                    <div class="col-lg-3">
                        <!-- <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div> -->
                        <?php if(Auth::guard('patient')->user()): ?>
                        <h6><span class="mr-2"><i class="fa fa fa-user"></i></span> <?php echo e(Auth::guard('patient')->user()->name); ?></h6>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="<?php echo e(route('user.dashboard')); ?>"><img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="" title="" style="width:50px;"/><span style="font-size:30px">OneScan</span></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('user.department')); ?>">departments</a></li>
                        <li><a href="<?php echo e(route('user.doctors')); ?>">doctors</a></li>
                        <li><a href="<?php echo e(route('user.contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo e(route('user.records')); ?>">records</a></li>
                        <?php if(Auth::guard('patient')->user()): ?>
                        <li><a href="<?php echo e(route('user.logout')); ?>">Logout</a></li>
                        <?php else: ?>
                        <li><a href="<?php echo e(route('user.login')); ?>">Login</a></li>
                        <?php endif; ?>				          				          
                    </ul>
                </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End --><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/common/userNavBar.blade.php ENDPATH**/ ?>