<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FSL-HRM</title>
        <link href="{{asset('styles.css')}}" rel="stylesheet" />
        <link href="{{asset('dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous" />
        <script src="{{asset('all.min.js')}}" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('index')}}">FSL</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h5 style="color:White;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HUMAN &nbsp;RESOURCE &nbsp;MANAGEMENT &nbsp;SYSTEM &nbsp;FSL</b></h5>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
           <!-- Navbar-->
           <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a style="color: aquamarine" class="dropdown-item" href="#"> {{ auth()->user()->name }} </a><a class="dropdown-item" href="{{route('view.user',Auth::id())}}">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
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

                        @if(auth()->user()->usertype=='1')
                            <div>



                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="assets/img/hero/emp.png" alt=""></a>
                                        <span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anika Labiba Jahin<br>
                                    </span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HR</span>
                                </div>
                                @endif

                                @if(auth()->user()->usertype=='0')
                              <div>



                            <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <img src="assets/img/hero/emp1.png" alt=""></a>
                                       <span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{ auth()->user()->name }}<br>
                                       </span>
                                       <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ auth()->user()->role }}</span>
                                  </div>
                              @endif


                                
                               








                                <br>
            
                            <a class="nav-link" href="{{route('index')}}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a >
                                @if(auth()->user()->role=='admin')
                        
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrganization" aria-expanded="false" aria-controls="collapseOrganization"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Organization
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseOrganization" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('department.index')}}">Department</a><a class="nav-link" href="{{route('designation.index')}}">Designation</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee" aria-expanded="false" aria-controls="collapseEmployee"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Employee
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseEmployee" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('employee.index')}}">Employee</a><a class="nav-link" href="{{route('salary.index')}}">Salary</a><a class="nav-link" href="{{route('promotion.index')}}">Promotion</a>
                                </nav>
                            </div>
                            @endif
                            
                            @if(Auth::check() && Auth::user()->role  == "admin" || Auth::user()->role  == "employee")
                         
                            <a class="nav-link" href="{{route('attendance.index')}}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Attendance</a
                            >
                            <a class="nav-link" href="{{route('notice.index')}}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Notice</a
                            >
                            <a class="nav-link" href="{{route('leave.index')}}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Leaves</a
                            >
                            <a class="nav-link" href="{{route('holiday.index')}}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-gifts"></i></div>
                                Office Holidays</a
                            >
                           
                            @endif
                            @if(Auth::user()->role  == "employee")
                            <a class="nav-link" href="{{route('salary.index')}}"
                            ><div class="sb-nav-link-icon"> <i class="fas fa-hand-holding-usd"></i></div>
                            Salary</a
                            >
                            @endif

                            @if(auth()->user()->role=='admin')
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRecruitments" aria-expanded="false" aria-controls="collapseRecruitments"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Recruitments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseRecruitments" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('job.index')}}">Job Posts</a><a class="nav-link" href="{{route('interview.index')}}">Interview Details</a></nav>
                            </div>
                            @endif
                            @if(auth()->user()->usertype=='0')

                           
                          
                            @endif


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
                        @if(auth()->user()->role=='admin')

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Employee : {{ $employ }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('employee.index')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            @endif
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Notice : {{ $notice }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('notice.index')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @if(auth()->user()->role=='admin')
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Attendance Today : {{ $attendance }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('attendance.index')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Leave Request : {{ $leave }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('leave.index')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
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
        <script src="{{asset('jquery-3.4.1.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('scripts.js')}}"></script>
        <script src="{{asset('Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('chart-area-demo.js')}}"></script>
        <script src="{{asset('chart-bar-demo.js')}}"></script>
        <script src="{{asset('jquery.dataTables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('dataTables.bootstrap4.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('datatables-demo.js')}}"></script>
    </body>
</html>
