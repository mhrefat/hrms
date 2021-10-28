


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 195%">

  <h2 style="text-align: center;" style="color:red; text:bold">KODEEO JOB INFORMATION</h2>
</div><br><br>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>

<div class="container">
    <h1 class="col-md-12" ><a href="<?php echo e(route('job.create')); ?>" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 205%">
        <thead>
        <tr>
            <th scope="col">SL NO</th>
            <th scope="col">Title</th>
            
            <th scope="col">Department</th>
            <th scope="col">Job Description</th>
            <th scope="col">Vacancy</th>
            <th scope="col">Experience</th>
            <th scope="col">Gender</th>
            <th scope="col">Application Deadline</th>
            <th scope="col">Location</th>
            <th scope="col">Salary</th>

            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $Jobe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td style="word-wrap: break-word"><?php echo e($single_data->title); ?></td>
            
            <td style="word-wrap: break-word"><?php echo e($single_data->desig); ?></td>
            <td style="word-wrap: break-word" ><?php echo e($single_data->descrip); ?></td>
            <td><?php echo e($single_data->position); ?></td>
            <td><?php echo e($single_data->exp); ?></td>
            <td><?php echo e($single_data->gender); ?></td>
            <td ><?php echo e($single_data->close); ?></td>
            <td><?php echo e($single_data->type); ?></td>
            <td><?php echo e($single_data->salary); ?></td>

            <td><?php echo e($single_data->status); ?></td>
            <td>
                <a href="<?php echo e(route('job.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('job.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">View</a>
                <a href="<?php echo e(route('job.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($Jobe->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Job/index.blade.php ENDPATH**/ ?>