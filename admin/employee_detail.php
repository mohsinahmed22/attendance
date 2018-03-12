<?php include "includes/admin_header.php" ; ?>
    <!-- Navigation -->
<?php
if(isset($_GET['user'])) {
    $user_id = $_GET['user'];
    $user = user_data($user_id);
}


?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?php echo $user['employee_name'];?>
                        <small><?php echo $user['designation'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Employees List
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-4">
                <div class="col-sm-4"><strong>Office Time <small>Start</small></strong> </div> <div class="col-sm-3"><?php echo $user['day_starttime'];?> </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-3"><strong>Monthly Salary</strong> </div> <div class="col-sm-3">Rs. <?php echo $user['monthly_salary'];?> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col-sm-4"><strong>Grace Time </strong></div> <div class="col-sm-3">Rs. <?php echo $user['grace_time'];?> </div>
                    </div>
                <div class="col-sm-6">
                    <div class="col-sm-3"><strong>Per Day</strong> </div> <div class="col-sm-3">Rs. <?php echo $user['per_day'];?> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
<!--                    <div class="col-sm-3"><strong>Grace Time</div> <div class="col-sm-3">--><?php //echo $user['grace_time'];?><!-- </div>-->
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-3"><strong>Per Hour</strong> </div> <div class="col-sm-3">Rs. <?php echo $user['per_hour'];?> </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ; ?>