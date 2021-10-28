


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">DESIGNATION INFORMATION</h2>
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  
<br><br><br>
<div class="container">
    <h1 class="col-md-12"><a href="<?php echo e(route('designation.create')); ?>" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" >
        <thead>
        <tr>
            <th scope="col">SL</th>
            
            <th scope="col">DESIGNATION</th>
            <th scope="col">DEPARTMENT</th>
              <th scope="col">STATUS</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
                <th scope="row"><?php echo e($key+1); ?></th>
            <td td style="word-wrap: break-word;word-break: break-all;"><?php echo e($single_data->dep_name); ?></td>
            <td td style="word-wrap: break-word;word-break: break-all;"><?php echo e($single_data->dep_head); ?></td>
            <td td style="word-wrap: break-word"><?php echo e($single_data->status); ?></td>
               <td>
                <a href="<?php echo e(route('designation.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('designation.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">View</a>
                <a href="<?php echo e(route('designation.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($dep->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/Designation/index.blade.php ENDPATH**/ ?>