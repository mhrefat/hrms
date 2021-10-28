

<?php $__env->startSection('content'); ?>
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px; width: 120%">VIEW EMPLOYEE DETAILS</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<div  style="width: 90%; " class="justify-content-center">
	<br>
	<table class="table table-bordered" style="table-layout: fixed; width: 130%; background-color: #F5F5F5" >
		
    <tbody>
    	<tr>
    		<td><h3>Profile Picture</h3></td>
	
	<td><h3><img src="<?php echo e(url('/uploads/employee/'.$emplo->image)); ?>" class="img-thumbnail" width="100"/></h3></td>
	</tr>
	<tr>

		<td><h3>Employee Id</h3></td>
	<td style="word-wrap: break-word"><h3><?php echo e($emplo->emp_id); ?></h3></td>
	</tr>
	<tr>
		<td><h3>Full Name</h3></td>
	<td style="word-wrap: break-word"><h3><?php echo e($emplo->name); ?></h3></td>
	</tr>
	<tr>
		<td><h3>Department</h3></td>
	<td style="word-wrap: break-word"><h3><?php echo e($emplo->depart); ?></h3></td>
	</tr>
	
	<tr>
		<td><h3>Designation</h3></td>
	<td><h3><?php echo e($emplo->desig); ?></h3></td>
	</tr>
	<tr>
<td><h3>Mobile</h3></td>
	<td><h3><?php echo e($emplo->mobile); ?></h3></td>
	</tr>
	<tr>
<td><h3>Email</h3></td>
	<td><h3><?php echo e($emplo->email); ?></h3></td>
	</tr>
	<tr>
<td><h3>Gender</h3></td>
	<td><h3><?php echo e($emplo->gender); ?></h3></td>
	</tr>
	<tr>
<td><h3>Joining Date</h3></td>
	<td><h3><?php echo e($emplo->join); ?></h3></td>
	</tr>
	<tr>
<td><h3>Address</h3></td>
	<td><h3><?php echo e($emplo->address); ?></h3></td>
	</tr>
	<tr>
<td><h3>Basic Salary</h3></td>
	<td><h3><?php echo e($emplo->salary); ?></h3></td>
	</tr>
	<tr>

	

				
	<td><h3>Date Of Birth</h3></td>
	<td><h3><?php echo e($emplo->birth); ?></h3></td>
	</tr>
	<tr>

		<td><h3>Status</h3></td>
	<td><h3><?php echo e($emplo->status); ?></h3></td>

	</tr>
        </tbody>
    </table>
	
</div>
<div class="form-group row">
    <div class="col-sm-8">
      <a href="<?php echo e(route('employee.index')); ?>" class="btn btn-warning"><h4>Back</h4></a>
	  <a href="<?php echo e(route('salary.edit', ['id'=>$emplo->id])); ?>" class="btn btn-success"><h4> Give Salary</h4></a>
    </div>
  </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Employee/show.blade.php ENDPATH**/ ?>