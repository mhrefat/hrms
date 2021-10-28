

<?php $__env->startSection('content'); ?>
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px; width: 120%">VIEW AWARD INFORMATION</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div  style="width: 90%; " class="justify-content-center">
	<br>
	<table class="table table-bordered" style="table-layout: fixed; width: 130%; background-color: #F5F5F5" >
		
    <tbody>
    	
	<tr>

		<td><h3>Salary Info</h3></td>
	<td><h3>Employee Id</h3></td>
	<td style="word-wrap: break-word"><h3><?php echo e($salaryy->emp_id); ?></h3></td>
	</tr>
	<tr>
		<td><h3>Employee Name</h3></td>
	<td><h3><?php echo e($salaryy->ename); ?></h3></td>
	</tr>
	<tr>
	 
	<td><h3>Designation</h3></td>
	<td><h3><?php echo e($salaryy->desig); ?></h3></td>
	</tr>
	<tr>
	<td><h3>Salary</h3></td>
	<td><h3><?php echo e($salaryy->salary); ?></h3></td>
	</tr>
	<tr>	
<td><h3>Month</h3></td>
	<td><h3><?php echo e($salaryy->month); ?></h3></td>
	</tr>
	
        </tbody>
    </table>
	
</div>
<div class="form-group row">
    <div class="col-sm-8">
      <a href="<?php echo e(route('salary.index')); ?>" class="btn btn-warning"><h4>Back</h4></a>
    </div>
  </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/Salary/show.blade.php ENDPATH**/ ?>