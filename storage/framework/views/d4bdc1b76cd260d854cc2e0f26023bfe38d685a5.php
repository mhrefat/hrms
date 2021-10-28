


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 145%">

  <h2 style="text-align: center;" style="color:red; text:bold">ATTENDANCE INFORMATION</h2>
</div><br><br>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  

<div class="container">

    <?php if(auth()->user()->role==='employee'): ?>

    <h1 class="col-md-12" ><a href="<?php echo e(route('attendance.create')); ?>" class="btn btn-info"  ><font size="4">Give Today Attendance</font></a></h1>
    <?php endif; ?>

<?php if(auth()->user()->role==='admin'): ?>
    <h1 class="col-md-12" ><a href="<?php echo e(route('attendance.create')); ?>" class="btn btn-info"  ><font size="4"> Edit Attendance</font></a></h1>

<?php endif; ?>





    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">SL</th>
            
         <th scope="col">Employee Id</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Office In Time</th>
            <th scope="col">Office Out Time</th>
            <th scope="col">Status</th>
            
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $attend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td><?php echo e($single_data->employee->emp_id); ?></td>
            <td><?php echo e($single_data->name); ?></td>
            <td td style="word-wrap: break-word"><?php echo e($single_data->in); ?></td>
            <td style="word-wrap: break-word"><?php echo e($single_data->out); ?></td>
            <td>
                <?php if($single_data->is_present == 1): ?>
                    <span>Present</span>
                  <?php else: ?>
                    <span>Absent</span>
                <?php endif; ?>
            </td>
            
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($attend->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/Attendance/index.blade.php ENDPATH**/ ?>