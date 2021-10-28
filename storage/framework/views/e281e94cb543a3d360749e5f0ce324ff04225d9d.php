

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
<div class="alert alert-info"  role="alert">

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW EMPLOYEE</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('employee.create')); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    <div class="form-group row">
    <label for="image" class="col-sm-3  col-form-label"><b>Profile Picture</b></label>
    <div class="col-sm-8">
      <input type="file" class="form-control " id="image" placeholder="Image" name="image">
    </div>
  </div>
  <div class="form-group row">
    <label for="emp_id" class="col-sm-3  col-form-label"><b>Employee Id</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="emp_id" placeholder="ID" name="emp_id">
    </div>
  </div>



  <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Employee Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Employee Full Name" name="name">
    </div>
  </div>

  <div class="form-group row">
    <label for="depart" class="col-sm-3  col-form-label"><b>Department</b></label>
    <div class="col-sm-8">
    <select name="depart" id="depart" class="form-control">
                <option value="">Select Department Name</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->dep_name); ?>"><?php echo e($category->dep_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
</div>
  </div>
<div class="form-group row">
    <label for="desig" class="col-sm-3  col-form-label"><b>Designation</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="Designation" name="desig">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobile" class="col-sm-3  col-form-label"><b>Mobile</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="mobile" placeholder="(+) Phone" name="mobile">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-3  col-form-label"><b>Email</b></label>
    <div class="col-sm-8">
      <input type="email" class="form-control " id="email" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="join" class="col-sm-3  col-form-label"><b>Joining Date</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="join" placeholder="Joining Date" name="join">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-3  col-form-label"><b>Present Address</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="address" placeholder="Address" name="address">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-sm-3  col-form-label"><b>Gender</b></label>
    <div class="col-sm-8">
      <select type="text" class="form-control " id="gender" placeholder="Enter holiday Id Here" name="gender">
         <option>Select Gender</option>
        <option>Male</option>
      <option>Female</option>
      

    </select>
    </div>
</div>
<div class="form-group row">
    <label for="salary" class="col-sm-3  col-form-label"><b>Basic Salary</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="salary" placeholder="Salary" name="salary">
    </div>
  </div>
  <div class="form-group row">
    <label for="birth" class="col-sm-3  col-form-label"><b>Date Of Birth</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="birth" placeholder="Birth" name="birth">
    </div>
  </div>

   <div class="form-group row">
    <label for="status" class="col-sm-3  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter holiday Id Here" name="status">

        <option>Active</option>
      <option>Inactive</option>
      

    </select>
    </div>
</div>

  <div class="form-group row">
    <div class="col-sm-9">
      <a href="<?php echo e(route('employee.index')); ?>" class="btn btn-warning">Cancel</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">CRETE</button>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/Employee/create.blade.php ENDPATH**/ ?>