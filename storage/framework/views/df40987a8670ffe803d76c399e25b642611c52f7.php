<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FSL-HRM</title>
        <link href="<?php echo e(asset('styles.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" crossorigin="anonymous" />
        <script src="<?php echo e(asset('all.min.js')); ?>" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>">FSL</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h5 style="color:White;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HUMAN &nbsp;RESOURCE &nbsp;MANAGEMENT &nbsp;SYSTEM &nbsp;FSL</b></h5>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
           <!-- Navbar-->
           <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <br>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav"><br>

                        <?php if(auth()->user()->usertype=='1'): ?>
                            <div>



                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="assets/img/hero/emp.png" alt=""></a>
                                        <span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anika Labiba Jahin<br>
                                    </span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HR</span>
                                </div>
                                <?php endif; ?>

                                <?php if(auth()->user()->usertype=='0'): ?>
                              <div>



                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <img src="assets/img/hero/emp1.png" alt=""></a>
                                       <span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Labiba Luba<br>
                                       </span>
                                       <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee</span>
                                  </div>
                              <?php endif; ?>


                                
                               








                                <br>
            
                            <a class="nav-link" href="<?php echo e(route('index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a >
                                <?php if(auth()->user()->usertype=='1'): ?>
                        
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrganization" aria-expanded="false" aria-controls="collapseOrganization"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Organization
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseOrganization" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo e(route('department.index')); ?>">Department</a><a class="nav-link" href="<?php echo e(route('designation.index')); ?>">Designation</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee" aria-expanded="false" aria-controls="collapseEmployee"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Employee
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseEmployee" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo e(route('employee.index')); ?>">Employee</a><a class="nav-link" href="<?php echo e(route('salary.index')); ?>">Salary</a><a class="nav-link" href="#">Promotion</a>
                                </nav>
                            </div>
                            
                    
                            <a class="nav-link" href="<?php echo e(route('attendance.index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Attendance</a
                            >
                            <a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Notices</a
                            >
                            <a class="nav-link" href="<?php echo e(route('leave.index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Leaves</a
                            >
                            <a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Office Holidays</a
                            >
                            
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRecruitments" aria-expanded="false" aria-controls="collapseRecruitments"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Recruitments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseRecruitments" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Job Posts</a><a class="nav-link" href="#">Interview Details</a></nav>
                            </div>
                            <?php endif; ?>
                            <?php if(auth()->user()->usertype=='0'): ?>

                            <a class="nav-link" href="<?php echo e(route('profile')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Profile</a
                            >
                            <a class="nav-link" href="<?php echo e(route('attendance.index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Attendance</a
                            >
                            <a class="nav-link" href="<?php echo e(route('notice.index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Notices</a
                            >
                            <a class="nav-link" href="<?php echo e(route('leave.index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Leaves</a
                            >
                            <a class="nav-link" href="<?php echo e(route('holiday.index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Office Holidays</a
                            >

                            <?php endif; ?>


                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Attendence</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo e(route('attendance.index')); ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Notice</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Leave</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Salary</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo e(route('salary.index')); ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                
                            </div>
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                        
                            
                                        
                                </div>
                            </div>
                        </div>

                    </div>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">         </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo e(asset('jquery-3.4.1.min.js')); ?>" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('bootstrap.bundle.min.js')); ?>" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('scripts.js')); ?>"></script>
        <script src="<?php echo e(asset('Chart.min.js')); ?>" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('chart-area-demo.js')); ?>"></script>
        <script src="<?php echo e(asset('chart-bar-demo.js')); ?>"></script>
        <script src="<?php echo e(asset('jquery.dataTables.min.js')); ?>" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('dataTables.bootstrap4.min.js')); ?>" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('datatables-demo.js')); ?>"></script>
    </body>
</html>
<?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/index.blade.php ENDPATH**/ ?>