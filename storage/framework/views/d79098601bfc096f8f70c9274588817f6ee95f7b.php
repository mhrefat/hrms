


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">EMPLOYEE SALARY INFORMATION</h2>
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  <br><br>
<?php if(auth()->user()->role=='admin'): ?>
<div class="container">
    <form action="<?php echo e(route('salary.index')); ?>">
      Search Employee  <input type="text" class="form-controll" name="query">
    </form>
</div>
<?php endif; ?>
<div class="container">
 
    <div class="col-md-12">
        
    <table class="table table-bordered" style="width: 130%">
        <thead>
        <tr>
            <th scope="col">SL</th>
    
            <th scope="col">Employee ID</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Department</th>
            <th scope="col">Designation</th>
            <th scope="col">Salary</th>
            <th scope="col">Month</th>

            
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $salaryy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
           
            <td><?php echo e($single_data->emp_id); ?></td>
            <td><?php echo e($single_data->name); ?></td>
            <td ><?php echo e($single_data->depart); ?></td>
            <td><?php echo e($single_data->desig); ?></td>
            <td ><?php echo e($single_data->salary); ?></td>
            <td><?php echo e($single_data->month); ?></td>
           
            <td>
                <a href="<?php echo e(route('salary.show', ['id'=>$single_data->id])); ?>" class="btn btn-warning">View</a>  
               
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($salaryy->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/salary/index.blade.php ENDPATH**/ ?>