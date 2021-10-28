

<?php $__env->startSection('content'); ?>
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px; width: 120%">VIEW HOLIDAY</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div  style="width: 90%; " class="justify-content-center">
	<br>
	<table class="table table-bordered" style="table-layout: fixed; width: 130%; background-color: #F5F5F5" >
		
    <tbody>
    	
	<tr>

		<td><h3>Event Name</h3></td>
	<td style="word-wrap: break-word"><h3><?php echo e($holida->name); ?></h3></td>
	</tr>
	<tr>
	


	<td><h3>Holiday Start</h3></td>
	<td><h3><?php echo e($holida->start); ?></h3></td>
	</tr>
	<tr>

		<td><h3>Holiday End</h3></td>
	<td><h3><?php echo e($holida->end); ?></h3></td>
	
	</tr>
		<td><h3>Status</h3></td>
	<td><h3><?php echo e($holida->status); ?></h3></td>

	</tr>
        </tbody>
    </table>
	
</div>
<div class="form-group row">
    <div class="col-sm-8">
      <a href="<?php echo e(route('holiday.index')); ?>" class="btn btn-warning"><h4>Back</h4></a>
    </div>
  </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Holiday/show.blade.php ENDPATH**/ ?>