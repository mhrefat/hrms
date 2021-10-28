

<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
 <ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($error); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
</div>
<?php endif; ?>
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div>

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE EMPLOYEE INFORMATION</h2>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('user.update',['id'=>$user->id])); ?>" enctype="multipart/form-data" align="center" >


 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    <div class="form-group row">
      <label for="image" class="col-sm-3  col-form-label"><b>Profile Picture</b></label>
      <div class="col-sm-8">
        <input type="file" class="form-control " id="image" placeholder="User Image" name="image" required value="">
      </div>
    </div>
  <div class="form-group row">
    <label for="emp_id" class="col-sm-3  col-form-label"><b>Employee Id</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="emp_id" placeholder="ID" name="emp_id" required value="<?php echo e(auth()->user()->emp_id); ?>">
    </div>
  </div>



  <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Employee Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Employee Full Name" name="name" required value="<?php echo e(auth()->user()->name); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="depart" class="col-sm-3  col-form-label"><b>Department</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="depart" placeholder="Department" name="depart" required value="<?php echo e(auth()->user()->depart); ?>">
    </div>
  </div>
<div class="form-group row">
    <label for="desig" class="col-sm-3  col-form-label"><b>Designation</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="Designation" name="desig" required value="<?php echo e(auth()->user()->desig); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobile" class="col-sm-3  col-form-label"><b>Mobile</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="mobile" placeholder="(+) Phone" name="mobile" required value="<?php echo e(auth()->user()->mobile); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="join" class="col-sm-3  col-form-label"><b>Joining Date</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="join" placeholder="(+) Phone" name="join" required value="<?php echo e(auth()->user()->join); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-3  col-form-label"><b>Email</b></label>
    <div class="col-sm-8">
      <input type="email" class="form-control " id="email" placeholder="Email" name="email" required value="<?php echo e(auth()->user()->email); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-3  col-form-label"><b>Present Address</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="address" placeholder="Address" name="address" required value="<?php echo e(auth()->user()->address); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-sm-3  col-form-label"><b>Gender</b></label>
    <div class="col-sm-8">
      <select type="text" class="form-control " id="gender" placeholder="Enter holiday Id Here" name="gender" required value="<?php echo e(auth()->user()->gender); ?>">
         <option selected><?php echo e(auth()->user()->gender); ?></option>
        <option>Male</option>
      <option>Female</option>
    </select>
    </div>
</div>
<!-- Salary cannot be changed by user -->
<div class="form-group row">
    <label for="salary" class="col-sm-3  col-form-label"><b>Basic Salary </b></label>
    <div class="col-sm-8">
    <input type="number" class="form-control " id="salary" placeholder="Salary" name="salary" required value="<?php echo e(auth()->user()->salary); ?>">    
    </div>
 </div>
  <div class="form-group row">
    <label for="birth" class="col-sm-3  col-form-label"><b>Date Of Birth</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="birth" placeholder="Birth" name="birth" required value="<?php echo e(auth()->user()->birth); ?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
 <button type="submit"  name="add" class="btn btn-info input-lg">UPDATE</button>
    </div>
  </div>
  </div>
</form>
<!-- Extended default form grid -->
</div>
 </div>
</form>
</div>
</div>
</div>
<br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/profile/edit.blade.php ENDPATH**/ ?>