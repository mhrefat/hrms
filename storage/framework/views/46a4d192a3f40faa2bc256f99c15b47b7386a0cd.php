

<?php $__env->startSection('content'); ?>
<div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW ATTENDANCE</h2>
</div>

<div class="container">

  <?php if(session()->has('successIn')): ?>
  <div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e(session('successIn')); ?></p>
  </div>
  <?php endif; ?>
   <?php if(session()->has('successOut')): ?>
   <div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e(session('successOut')); ?></p>
  </div>
  <?php endif; ?>

 <?php if(session()->has('error')): ?>
 <div class="alert alert-danger">
    <p><?php echo e(session('error')); ?></p>
  </div>
  <?php endif; ?>
 
 



     <div class="row" style="margin-top: 100px;">
      <div class="col-lg-12 mb-2"><h3>Today attendacene : <?php echo e(now()->format('Y.m.d H:i:s')); ?></h3></div>
      <div class="col-lg-12">

         <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Employee ID</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Department</th>
           <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td><?php echo e($single_data->emp_id); ?></td>
            <td><?php echo e($single_data->name); ?></td>
            <td ><?php echo e($single_data->depart); ?></td>
            <td>
                <a href="<?php echo e(route('attendance.in', ['id'=>$single_data->id])); ?>" class="btn btn-warning">IN</a>
                <a href="<?php echo e(route('attendance.out', ['id'=>$single_data->id])); ?>" class="btn btn-success">Out</a>


                <?php if(auth()->user()->role==='admin'): ?>
                <a href="<?php echo e(route('attendance.absent', ['id'=>$single_data->id])); ?>" class="btn btn-success">absent</a>
                <?php endif; ?>
              
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
      </div>
       
     </div>
  
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Attendance/create.blade.php ENDPATH**/ ?>