<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <br><br>
            
                            <a class="nav-link" href="<?php echo e(route('index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a >
                                <?php if(auth()->user()->role==='admin'): ?>
                        
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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo e(route('employee.index')); ?>">Employee</a><a class="nav-link" href="<?php echo e(route('award.index')); ?>">Award</a><a class="nav-link" href="<?php echo e(route('promotion.index')); ?>">Promotion</a></nav>
                            </div>
                            
                    
                            <a class="nav-link" href="<?php echo e(route('attendance.index')); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Attendance</a
                            ><a class="nav-link" href="<?php echo e(route('notice.index')); ?>"
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
                             
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRecruitments" aria-expanded="false" aria-controls="collapseRecruitments"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Recruitments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseRecruitments" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo e(route('job.index')); ?>">Job Posts</a><a class="nav-link" href="<?php echo e(route('interview.index')); ?>">Interview Details</a></nav>
                            </div>
                            <?php endif; ?>
                            <?php if(auth()->user()->role==='employee'): ?>
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
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        
                        <span><?php echo e(auth()->user()->role); ?></span>
                    </div>
                </nav><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/side.blade.php ENDPATH**/ ?>