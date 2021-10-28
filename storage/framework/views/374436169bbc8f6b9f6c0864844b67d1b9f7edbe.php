

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

  <h2 style="text-align: center;" style="color:red; text:bold">ADD NEW NOTICE</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('notice.create')); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  
  <div class="form-group row">
    <label for="title" class="col-sm-3  col-form-label"><b>Notice Title</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="title" placeholder="Notice Title " name="title">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="description" class="col-sm-3  col-form-label"><b>Notice Body</b></label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control " id="description" placeholder="Notice Description" name="description"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-sm-3  col-form-label"><b>Publish Date</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="date" placeholder="Enter Publish Date Here" name="date">
    </div>
  </div>
  <div class="form-group row">
    <label for="department" class="col-sm-3  col-form-label"><b>Department</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="department" placeholder="Enter Department Here" name="department">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-9">
      <a href="<?php echo e(route('notice.index')); ?>" class="btn btn-warning">CANCEL</a>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Notice/create.blade.php ENDPATH**/ ?>