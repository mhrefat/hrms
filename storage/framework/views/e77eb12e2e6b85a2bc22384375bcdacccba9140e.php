


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">EMPLOYEE INFORMATION</h2>
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  <br><br>

<div class="container">
    <form action="<?php echo e(route('employee.index')); ?>">
      Search Employee  <input type="text" class="form-controll" name="query">
    </form>
</div>

<div class="container">
    <h1 class="col-md-12" ><a href="<?php echo e(route('employee.create')); ?>" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-bordered" style="width: 120%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Profile Pic</th>
            <th scope="col">Employee ID</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Department</th>
            <th scope="col">Designation</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>

             <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $emplo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td><a href="<?php echo e(url('/uploads/employee/'.$single_data->image)); ?>" download>
        <img src="<?php echo e(url('/uploads/employee/'.$single_data->image)); ?>" class="img-thumbnail" width="75"></a></td>
            <td><?php echo e($single_data->emp_id); ?></td>
            <td><?php echo e($single_data->name); ?></td>
            <td ><?php echo e($single_data->depart); ?></td>
            <td><?php echo e($single_data->desig); ?></td>
            <td ><?php echo e($single_data->mobile); ?></td>
            <td><?php echo e($single_data->email); ?></td>
            <td><?php echo e($single_data->status); ?></td>
            <td>
                <a href="<?php echo e(route('employee.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('employee.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">View</a>
                <a href="<?php echo e(route('employee.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>
                <a href="<?php echo e(route('salary.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Salary</a>
           
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($emplo->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Employee/index.blade.php ENDPATH**/ ?>