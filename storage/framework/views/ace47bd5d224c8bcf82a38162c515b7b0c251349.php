
<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Auto Calculation</title>
    <link href="style/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="container">
        <p><br/></p>
        <form name="cart">
            <table name="cart" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Employee</th>
                        <th>Salary</th>
                        <th>Bonus</th>
                        <th>Allowance</th>
                        <th>Item Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr name="line_items">
                        <td></td>
                        <td>Employee</td>
                        <td><input type="text" name="qty" value="" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="price" value="" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="bonus" value="" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty} + {price} + {bonus}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Subtotal</td>
                        <td>&nbsp;</td>
                        <td><input type="text" name="sub_total" jAutoCalc="SUM({item_total})" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Tax</td>
                        <td>
                            <select name="tax" class="form-control">
                                <option value=".06">CT Tax</option>
                                <option value=".00">Tax Free</option>
                            </select>
                        </td>
                        <td><input type="text" name="tax_total" jAutoCalc="{sub_total} * {tax}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Total</td>
                        <td>&nbsp;</td>
                        <td><input type="text" name="grand_total" jAutoCalc="{sub_total} + {tax_total}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <button name="add" class="btn btn-primary">Add Row</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    
    <script src="style/js/jquery.min.js"></script>
    <script src="style/js/jautocalc.js"></script>
    <script src="style/js/script.js"></script>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRMS\resources\views/Salary/test.blade.php ENDPATH**/ ?>