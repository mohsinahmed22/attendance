<?php include "includes/admin_header.php" ; ?>
    <!-- Navigation -->
<?php
    if(isset($_POST['submit'])){

        $new_user = add_new_user($_POST);
        if($new_user){
            header("Location: employees.php?new=ture"); /* Redirect browser */

        }

    }

?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add New Employee
                        <small>Etoolmarts Employees</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="employees.php">Employees List</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Add New Employee
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">
                        <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Employee Name</label>
                            <input class="form-control" name="employee_name" type="text" placeholder="Enter New Employee Name" required/>
                        </div>
                            <div class="form-group col-sm-3">
                                <label>Designation</label>
                                <input class="form-control" name="designation" type="text" placeholder="Designation" required/>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-sm-2">
                                <label>Calculate Salary as per </label>
                                <div class="input-group">
                                    <span class="input-group-addon">Days</span>
                                <input class="form-control" name="cal_as_per" id="cal_as_per"  type="number" value="23" min="18" max="30"/>
                                    </div>
                            </div>

                            <div class="form-group col-sm-2">
                                <label>Daily Office Hours </label>
                                <div class="input-group">
                                    <span class="input-group-addon">Hours</span>
                                <input class="form-control" name="hours_due" id="hours_due"  type="number" value="9"/>
                                    </div>
                            </div>


                            <div class="form-group col-sm-2">
                                <label>Office Start Time <sup>HH:MM:AM/PM</sup> </label>
                                <input class="form-control" name="day_starttime" id="day_starttime"  type="time" placeholder="Hours:Min:Sec" defaultValue="" value="11:00:00"/>
                            </div>
                            <div class="form-group col-sm-2">
                                <label>Grace Time </label>
                                <input class="form-control" name="grace_time" id="grace_time" type="time" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label>Salary</label>
                                <div class="input-group">
                                <span class="input-group-addon">Rs.</span>
                                <input class="form-control" name="monthly_salary"  type="number" placeholder="" id="monthly_salary" required/>
                                    </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Per Day</label>
                                <div class="input-group">
                                    <span class="input-group-addon">Rs.</span>
                                <input class="form-control" name="per_day" id="per_day"  type="number"  disabled/>
                                    </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Per Hour</label>
                                <div class="input-group">
                                    <span class="input-group-addon">Rs.</span>
                                <input class="form-control disabled" name="per_hour"  id="per_hour"  type="number" disabled />
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <button type="submit" name="submit" class="btn btn-success">Add New Employee</button>
                            </div>
                            </div>

                    </form>
                </div>
            </div>




        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
<script src="js/jquery.js"></script>

<script>
    $('#monthly_salary').change(function() {
        $('#per_hour').val($(this).val()/$('#hours_due').val()/$('#cal_as_per').val());
        $('#per_day').val($(this).val()/$('#cal_as_per').val());

    });
</script>


<?php include "includes/admin_footer.php" ; ?>

