

<?php $__env->startSection('content'); ?>
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px; width: 120%">VIEW JOB DETAILS</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div  style="width: 90%; " class="justify-content-center">
	<br>
	<table class="table table-bordered" style="table-layout: fixed; width: 130%; background-color: #F5F5F5" >
		
    <tbody>
    	<tr>
    		<td><h3>JOB TITLE</h3></td>
	
	<td><h3><?php echo e($Jobe->title); ?></h3></td>
	</tr>


	<tr>
    		<td><h3>DEPARTMENT</h3></td>
	
	<td><h3><?php echo e($Jobe->desig); ?></h3></td>
	</tr>


	<tr>

		<td><h3>JOB DESCRIPTION</h3></td>
	<td style="word-wrap: break-word"><h3><?php echo e($Jobe->descrip); ?></h3></td>
	</tr>
	<tr>
    		<td><h3>VACANCY</h3></td>
	
	<td><h3><?php echo e($Jobe->position); ?></h3></td>
	</tr>
	<tr>
    		<td><h3>MINIMUM EXPERIENCE</h3></td>
	
	<td><h3><?php echo e($Jobe->exp); ?></h3></td>
	</tr>
	<tr>
    		<td><h3>GENDER</h3></td>
	
	<td><h3><?php echo e($Jobe->gender); ?></h3></td>
	</tr>
	<tr>
    		<td><h3>APPLICATION DEADLINE</h3></td>
	
	<td><h3><?php echo e($Jobe->close); ?></h3></td>
	</tr>
	<tr>
    		<td><h3>LOCATION</h3></td>
	
	<td><h3><?php echo e($Jobe->type); ?></h3></td>
	</tr>
	<tr>
    		<td><h3>SALARY</h3></td>
	
	<td><h3><?php echo e($Jobe->salary); ?></h3></td>
	</tr>




	<tr>	<td><h3>Status</h3></td>
	<td><h3><?php echo e($Jobe->status); ?></h3></td>

	</tr>
        </tbody>
    </table>
	
</div>
<div class="form-group row">
    <div class="col-sm-8">
      <a href="<?php echo e(route('job.index')); ?>" class="btn btn-warning"><h4>Back</h4></a>
    </div>
  </div>
  </div><br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Job/show.blade.php ENDPATH**/ ?>