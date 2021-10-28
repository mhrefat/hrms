

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

  <h2 style="text-align: center;" style="color:red; text:bold">APPLY FOR NEW LEAVE</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('leave.store')); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->

<div class="form-group row">
    <label for="reason" class="col-sm-3  col-form-label"><b>Leave Reason</b></label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control " id="reason" placeholder="Valid Reson For Leave" name="reason"></textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="emp_id" class="col-sm-3  col-form-label"><b>Employee ID</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="emp_id" placeholder="Enter Leave Id Here" name="emp_id" value="<?php echo e(auth()->user()->emp_id); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Employee name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Enter Leave Id Here" name="name" value="<?php echo e(auth()->user()->name); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="from" class="col-sm-3  col-form-label"><b>Leave From</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="from" placeholder="" name="from">
    </div>
  </div>
  <div class="form-group row">
    <label for="to" class="col-sm-3  col-form-label"><b>Leave To</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="to" placeholder="" name="to">
    </div>
  </div>

  <div class="form-group row">
    <label for="mobile" class="col-sm-3  col-form-label"><b>Emergency Contact</b></label>
    <div class="col-sm-8">
      <input type="number" class="form-control " id="mobile" placeholder="(+) Phone" name="mobile">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="status" class="col-sm-3  col-form-label"><b>Status</b></label>
    <div class="col-sm-8">
      <select type="date" class="form-control " id="status" placeholder="Enter Leave Id Here" name="status">

        <option>Pending</option>
      
      

    </select>
    </div>
</div>

  <div class="form-group row">
    <div class="col-sm-9">
      <a href="<?php echo e(route('leave.index')); ?>" class="btn btn-warning">Cancel</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">Create</button>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Leave/create.blade.php ENDPATH**/ ?>