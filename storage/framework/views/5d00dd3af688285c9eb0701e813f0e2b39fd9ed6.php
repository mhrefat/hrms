


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">Salary Information</h2>
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  <br><br>

<div class="container">
    <h1 class="col-md-12" ><a href="<?php echo e(route('salary.create')); ?>" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 130%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Employee Id</th>
            <th scope="col">Employee Name</th>
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
            <td style="word-wrap: break-word"><?php echo e($single_data->name); ?></td>
            
            
            <td><?php echo e($single_data->emp_id); ?></td>
            <td><?php echo e($single_data->ename); ?></td>
            <td ><?php echo e($single_data->desig); ?></td>
            <td ><?php echo e($single_data->salary); ?></td>
            <td ><?php echo e($single_data->month); ?></td>
            <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('salary.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">Details</a>
                <a href="<?php echo e(route('salary.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($salaryy->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/salary/index.blade.php ENDPATH**/ ?>