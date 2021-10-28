


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 145%">

  <h2 style="text-align: center;" style="color:red; text:bold">LEAVE INFORMATION</h2>
</div><br><br>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  
<?php if($message=Session::get('warning')): ?>
<div class="alert alert-danger" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  

<div class="container">
    
    <?php if(auth()->user()->role==='employee'): ?>
    <h1 class="col-md-12" ><a href="<?php echo e(route('leave.create')); ?>" class="btn btn-info"  ><font size="4">APPLY FOR NEW LEAVE</font></a></h1>
    <?php endif; ?>

    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 155%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Leave Reason</th>
            
         <th scope="col">Employee Id</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Leave From</th>
            <th scope="col">Leave To</th>
            <th scope="col">Total Days</th>
            
             <th scope="col">Emergency Contact</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $leaveee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td style="word-wrap: break-word"><?php echo e($single_data->reason); ?></td>
            <td><?php echo e($single_data->emp_id); ?></td>
            <td><?php echo e($single_data->name); ?></td>
            <td td style="word-wrap: break-word"><?php echo e($single_data->from); ?></td>
            <td><?php echo e($single_data->to); ?></td>
            <td><?php echo e($single_data->diff_in_days); ?></td>  <td style="word-wrap: break-word"><?php echo e($single_data->mobile); ?></td>
            <td><?php echo e($single_data->status); ?></td>
            <td>
                <?php if(auth()->user()->role==='admin'): ?>


                <a href="<?php echo e(route('leave.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Edit</a>

                <a href="<?php echo e(route('leave.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>

                <?php endif; ?>


                <a href="<?php echo e(route('leave.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">View</a>

                



            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($leaveee->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Leave/index.blade.php ENDPATH**/ ?>