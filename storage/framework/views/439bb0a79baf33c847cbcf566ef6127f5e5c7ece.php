

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

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW DEPARTMENT</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('department.create')); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    
  <div class="form-group row">
    <label for="dep_name" class="col-sm-3  col-form-label"><b>DEPARTMENT NAME</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="dep_name" placeholder="Department Name " name="dep_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="dep_head" class="col-sm-3  col-form-label"><b>DEPARTMENT HEAD</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="dep_head" placeholder="Department Head " name="dep_head">
    </div>
  </div>
  <div class="form-group row">
    <label for="desig" class="col-sm-3  col-form-label"><b>DESIGNATIONS</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="desig" placeholder="DESIGNATIONS " name="desig">
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-9">
      <a href="<?php echo e(route('department.index')); ?>" class="btn btn-warning">CANCEL</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">CREATE</button>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/Department/create.blade.php ENDPATH**/ ?>