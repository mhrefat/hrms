
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
        <?php echo $__env->make('top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php echo $__env->make('side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
                        <?php echo $__env->yieldContent('content'); ?>
                    

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> &copy; Anika Labiba </div>
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
<?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/master.blade.php ENDPATH**/ ?>