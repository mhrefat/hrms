<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href=<?php echo e(route('index')); ?>>FSL</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h5 style="color:White;"><b>HUMAN &nbsp;RESOURCE&nbsp; MANAGEMENT &nbsp;SYSTEM &nbsp;FSL</b></h5><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a style="color: aquamarine" class="dropdown-item" href="#"> <?php echo e(auth()->user()->name); ?> </a><a class="dropdown-item" href="<?php echo e(route('view.user',Auth::id())); ?>">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Logout</a>
                    </div>
                </li>
            </ul>
        </nav><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/top.blade.php ENDPATH**/ ?>