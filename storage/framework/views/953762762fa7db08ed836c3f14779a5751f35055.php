


<?php $__env->startSection('content'); ?>



    <div class="alert alert-info"  role="alert" style="width: 125%">

  <h2 style="text-align: center;" style="color:red; text:bold">NOTICE BOARD</h2>
</div><br><br><br>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success" style="margin-left: 300px;">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>  



<div class="container">
    <?php if(auth()->user()->role==='admin'): ?>
    <h1 class="col-md-12"><a href="<?php echo e(route('notice.create')); ?>" class="btn btn-info"  ><font size="4">ADD NEW</font></a></h1>
    <?php endif; ?>
    <div class="col-md-12">
        
    <table class="table table-striped table-bordered table-hover" style="table-layout: fixed; width: 130%">
        <thead>
        <tr>
            
            <th scope="col">SL</th>
            <th scope="col">Title</th>
            
            <th scope="col">Body</th>

            <th scope="col">Published On</th>
            <th scope="col">DEPARTMENT</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $noticee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$single_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
             <th scope="row"><?php echo e($key+1); ?></th>
            <td style="word-wrap: break-word"><?php echo e($single_data->title); ?></td>
            <td style="word-wrap: break-word"><?php echo e($single_data->description); ?></td>
            <td td style="word-wrap: break-word"><?php echo e($single_data->date); ?></td>
            <td td style="word-wrap: break-word"><?php echo e($single_data->department); ?></td>
            <td>
                <?php if(auth()->user()->role==='admin'): ?>


                <a href="<?php echo e(route('notice.edit', ['id'=>$single_data->id])); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('notice.destroy', ['id'=>$single_data->id])); ?>" class="btn btn-danger">Delete</a>
                <?php endif; ?>


                <a href="<?php echo e(route('notice.show', ['id'=>$single_data->id])); ?>" class="btn btn-success">View</a>
                
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php echo e($noticee->links()); ?>    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Notice/index.blade.php ENDPATH**/ ?>