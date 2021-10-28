


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

  <h2 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">UPDATE DEPARTMET</h2>
</div><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('department.update',['id'=>$dep->id])); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    
  <div class="form-group row">
    <label for="dep_name" class="col-sm-3  col-form-label"><b>DEPARTMENT NAME</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="dep_name" placeholder="Enter Leave Id Here" name="dep_name" required value="<?php echo e($dep->dep_name); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="dep_head" class="col-sm-3  col-form-label"><b>DEPARTMENT HEAD</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="dep_head" placeholder="Enter Leave Id Here" name="dep_head" required value="<?php echo e($dep->dep_head); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="com_name" class="col-sm-3  col-form-label"><b>Designations</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="edesig" name="edesig" required value="<?php echo e($dep->edesig); ?>" >
    </div>
  </div>
  
  </div><br><br>
  <div class="form-group row">
    <div class="col-sm-11">
      <a href="<?php echo e(route('department.index')); ?>" class="btn btn-warning">Cancel</a>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\laravel-permission-master\HRMS\resources\views/Department/edit.blade.php ENDPATH**/ ?>