


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
<head>
  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE SALARY INFORMATION</h2>
  <script type="text\javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
 
</div><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


<body>
  <script>
      $(document).ready(function(){
        $("#bonus").keyup(function(){
          alert("Hi");
        });
      });
  </script>

<form method="post" action="<?php echo e(route('salary.update',['id'=>$employ->id])); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Employee Name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Award Name" name="name" required value="<?php echo e($employ->name); ?>">
    </div>
  </div>
<div class="form-group row">
    <label for="emp_id" class="col-sm-3  col-form-label"><b>Employee Id</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="emp_id" placeholder="Award Name" name="emp_id" required value="<?php echo e($employ->emp_id); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="depart" class="col-sm-3  col-form-label"><b>Employee Department</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="depart" placeholder="Award Name" name="depart" required value="<?php echo e($employ->depart); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="desig" class="col-sm-3  col-form-label"><b>Employee Designation</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="" name="desig" required value="<?php echo e($employ->desig); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="salary" class="col-sm-3  col-form-label"><b>Employee Salary</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="salary" placeholder="" name="salary" required value="<?php echo e($employ->salary); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="allowance" class="col-sm-3  col-form-label"><b>Medical Allowance</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="allowance" placeholder="" name="allowance" required value="500">
    </div>
  </div>

  <div class="form-group row">
    <label for="fund" class="col-sm-3  col-form-label"><b>Providient Fund</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="fund" placeholder="" name="fund" required value="1000">
    </div>
  </div>

  <div class="form-group row">
    <label for="bonus" class="col-sm-3  col-form-label"><b>Bonus</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="bonus" placeholder="" name="bonus" required value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="reduction" class="col-sm-3  col-form-label"><b>Reduction</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="reduction" placeholder="" name="reduction" required value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="month" class="col-sm-3  col-form-label"><b>Month</b></label>
    <div class="col-sm-8">
      <input type="month" class="form-control " id="month" placeholder="" name="month" required value="">
    </div>
  </div>



  <div class="form-group row">
    <div class="col-sm-10">
      <a href="<?php echo e(route('salary.index')); ?>" class="btn btn-warning">Cancel</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">Update</button>
    </div>
  </div>
  </div>
</form>

<!-- Extended default form grid -->
</div>
 </div>
</form>
</body>
</div>
</div>
</div>
<br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Salary/edit.blade.php ENDPATH**/ ?>