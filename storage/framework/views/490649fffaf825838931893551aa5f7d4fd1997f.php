
<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="jquery.datetimepicker.min.css" />
<script src="jquery.js"></script>
<script src="jquery.datetimepicker.full.js"></script>

<input type="date" id="date1">
<input type="date" id="date2">
 
<button onclick="calculateDifference();">Calculate</button>
<input type="text" id="days" value="" jAutoCalc="{days}">
<script>
    $("#date1").datetimepicker({
        timepicker: false,
        format: "mm-dd-yyyy"
    });
 
    $("#date2").datetimepicker({
        timepicker: false,
        format: "mm-dd-yyyy"
    });

    function calculateDifference() {
    // Get both values from input field and convert them into Javascript Date object
    var date1 = new Date($("#date1").val());
    var date2 = new Date($("#date2").val());
 
    // Difference can be calculated by subtracting the first date timestamp from second date timestamp
    var timeDifference = date2.getTime() - date1.getTime();
 
    // Just for debugging purpose
   
   // There are 1000 milliseconds in 1 second
var milliSecondsInOneSecond = 1000;
 
 // There are 3600 seconds in 1 hour
 var secondsInOneHour = 3600;
  
 // And we all know there are 24 hours in 1 day
 var hoursInOneDay = 24;

 var days = timeDifference / (milliSecondsInOneSecond * secondsInOneHour * hoursInOneDay);




 alert(days);
   

}
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/test.blade.php ENDPATH**/ ?>