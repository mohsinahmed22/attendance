<?php include "includes/admin_header.php" ; ?>
    <!-- Navigation -->


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Employees List
                        <small>Etoolmarts Employees List</small>
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
        <div class="col-lg-12 text-right" style="margin-bottom:20px;">
            <a class="btn btn-success" href="new_employee.php">New Employee</a>
            </div>
        </div>
            <?php
            if(isset($_GET['new'])){ ?>
                <div class="alert alert-success">New Employee Successfully Created</div>
            <?php
            }if(isset($_GET['edit'])){?>
                <div class="alert alert-success">Employee Successfully Updated</div>
            <?php } ?>
        <div class="row">
        <div class="col-lg-12">
            <?php $all_users = users_data(); ?>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th class="text-center">Employee Name</th>
                    <th class="text-center">Designation</th>
                    <th class="text-center">Start Time</th>
                    <th class="text-center">Grace Time</th>
                    <th class="text-center">Hours Due</th>
                    <th class="text-center">Per Day</th>
                    <th class="text-center">Per Hour</th>
                    <th class="text-center">Monthly Salary</th>
                    <th class="text-center">Action</th>

                </tr>
                </thead>
                <tbody>
                <?php  while($row = mysqli_fetch_assoc($all_users)){ ?>
                    <tr>
                        <td><?php  echo $row['employee_name'];?></td>
                        <td><?php  echo $row['designation'];?></td>
                        <td><?php  echo $row['day_starttime'];?></td>
                        <td><?php  echo $row['grace_time'];?></td>
                        <td><?php  echo $row['hours_due'];?></td>
                        <td><?php  echo $row['per_day'];?></td>
                        <td><?php  echo $row['per_hour'];?></td>
                        <td><?php  echo $row['monthly_salary'];?></td>
                        <td><a href="edit_employee.php?user=<?php  echo $row['id'];?>">Edit</a> | <a href="employee_detail.php?user=<?php  echo $row['id'];?>">View</a> | <a href="employees.php?delete=<?php  echo $row['id'];?>">Delete</a></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
            </div>
            </div>




        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ; ?>