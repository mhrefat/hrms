


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold"> OFFICE HOLIDAYS LIST</h2>
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  <br><br>

<div>

 <center><h2 style="text-align:; margin-top: 10px auto; background-color:red; padding: 5px; width: 50%">EVERY FRIDAY WEEKLY HOLIDAY</h2></center> 
</div>

<div class="container">

<?php if(auth()->user()->role==='admin'): ?>

    <h1 class="col-md-12" ><a href="<?php echo e(route('holiday.create')); ?>" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
<?php endif; ?>

    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 130%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Event Name</th>
            <th scope="col">Holiday Start</th>
            <th scope="col">Holiday End</th>

            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $holida; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td style="word-wrap: break-word"><?php echo e($single_data->name); ?></td>
            <td><?php echo e($single_data->start); ?></td>
            <td ><?php echo e($single_data->end); ?></td>
            <td><?php echo e($single_data->status); ?></td>
            <td>
                <?php if(auth()->user()->role==='admin'): ?>


                <a href="<?php echo e(route('holiday.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Edit</a>


                <a href="<?php echo e(route('holiday.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>
                <?php endif; ?>



                <a href="<?php echo e(route('holiday.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">View</a>



            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($holida->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Holiday/index.blade.php ENDPATH**/ ?>