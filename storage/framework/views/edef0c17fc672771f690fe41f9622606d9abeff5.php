


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">INTERVIEW INFORMATION</h2>
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  <br><br>

<div class="container">
    <h1 class="col-md-12" ><a href="<?php echo e(route('interview.create')); ?>" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 130%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Job Title</th>
            <th scope="col">Selected Candidate</th>
            <th scope="col">Location</th>
            <th scope="col">Interview Date & Time</th>
            <th scope="col">Interviewers</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $inter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>

            <td style="word-wrap: break-word"><?php echo e($single_data->job); ?></td>
            <td><a href="<?php echo e(URL::to('/')); ?>/image/<?php echo e($single_data->image); ?>" download class="btn btn-success">
        Download </a></td>
            <td style="word-wrap: break-word"><?php echo e($single_data->place); ?></td>
            <td><?php echo e($single_data->date); ?></td>
            <td style="word-wrap: break-word"><?php echo e($single_data->interviewrs); ?></td>
            <td>
                <a href="<?php echo e(route('interview.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('interview.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">View</a>
                <a href="<?php echo e(route('interview.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($inter->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Interview/index.blade.php ENDPATH**/ ?>