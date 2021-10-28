

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

  <h2 style="text-align: center;" style="color:red; text:bold">ADD PROMOTION INFORMATION</h2>
</div><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<form method="post" action="<?php echo e(route('promotion.create')); ?>" enctype="multipart/form-data" align="center" >

 <?php echo csrf_field(); ?>

<!-- Extended default form grid -->
<form >
  <!-- Grid row -->
  <div class="form-col" align="center">
    <!-- Default input -->
    <div class="form-group row">
    <label for="name" class="col-sm-3  col-form-label"><b>Promotion Title</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control " id="name" placeholder="Title" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="emp_id" class="col-sm-3  col-form-label"><b>Employee Id</b></label>
    <div class="col-sm-8">
    <select name="emp_id" id="emp_id" class="form-control">
                <option value="">---Select Employee Id---</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->emp_id); ?>"><?php echo e($category->emp_id); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

  </div> 
  <div class="form-group row">
    <label for="ename" class="col-sm-3  col-form-label"><b>Employee Name</b></label>
    <div class="col-sm-8">
    <select name="ename" id="ename" class="form-control">
                <option value="">Select Employee Name</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->name); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

  </div>
  <div class="form-group row">
    <label for="month" class="col-sm-3  col-form-label"><b>Promotion Date</b></label>
    <div class="col-sm-8">
      <input type="date" class="form-control " id="month" placeholder="" name="month">
    </div>
  </div>

  
  <div class="form-group row">
    <div class="col-sm-9">
      <a href="<?php echo e(route('promotion.index')); ?>" class="btn btn-warning">CANCEL</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">CREATE </button>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Promotion/create.blade.php ENDPATH**/ ?>