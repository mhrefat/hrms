

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

  <h2 style="text-align: center;" style="color:red; text:bold">ADD INTERVIEW INFORMATION</h2>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('interview.create')); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->

<div class="form-group row">
    <label for="job" class="col-sm-3  col-form-label"><b>Job Title</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="job" placeholder="Job Title" name="job">
    </div>
  </div>

    <div class="form-group row">
    <label for="image" class="col-sm-3  col-form-label"><b>Selected Candidate</b></label>
    <div class="col-sm-8">
      <input type="file" class="form-control " id="image" placeholder="Image" name="image">
    </div>
  </div>
 
  <div class="form-group row">
    <label for="place" class="col-sm-3  col-form-label"><b>Location</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="place" placeholder="Location" name="place">
    </div>
  </div>

  
  <div class="form-group row">
    <label for="date" class="col-sm-3  col-form-label"><b>Interview Date & Time</b></label>
    <div class="col-sm-8">
      <input type="datetime-local" class="form-control " id="date" placeholder="Joining Date" name="date">
    </div>
  </div>
  <div class="form-group row">
    <label for="interviewrs" class="col-sm-3  col-form-label"><b>Interviewers</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="interviewrs" placeholder="Interviewers" name="interviewrs">
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-9">
      <a href="<?php echo e(route('interview.index')); ?>" class="btn btn-warning">Cancel</a>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Interview/create.blade.php ENDPATH**/ ?>