<?php include "includes/admin_header.php" ; ?>
    <!-- Navigation -->


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Attendance Sheet
                        <small>Etoolmarts Attendance</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Attendance
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 text-right" style="margin-bottom:20px;">
                    <?php
                    if(!empty($_SESSION['checkin'])){echo  "<p>Checkin Time:" . $_SESSION['checkin'] . " , " . $_SESSION['checkin_date'] ."</p>";}
                    else{echo "<p>Last Login Time:" . $_SESSION['checkout'] . " , " . $_SESSION['checkin_date']. "</p>";}

                    ?>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <?php
                    $users_attendance = array();
                    $users_attendance =  user_attendnace($_SESSION['id']); ?>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th class="text-center" width="7%">Month</th>
                            <th class="text-center" width="7%">Date</th>
                            <th class="text-center" width="7%">Check in</th>
                            <th class="text-center" width="7%">Check out</th>
                            <th class="text-center" width="7%">Hrs Due</th>
                            <th class="text-center" width="7%">Hrs Spend</th>
                            <th class="text-center" width="7%">Short Hrs</th>
                            <th class="text-center" width="7%">OverTime</th>
                            <th class="text-center" width="7%">Status</th>
                            <th class="text-center">Comments</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($users_attendance)){
                            $date =  date_create($row['daily_date']);
                            ?>
                            <tr>
                                <td class="text-center"><?php echo date_format($date,"F")?></td>
                                <td class="text-center"><?php echo $row['daily_date'];?></td>
                                <td class="text-center"><?php echo $row['check_in'];?></td>
                                <td class="text-center"><?php echo $row['check_out'];?></td>
                                <td class="text-center"><?php echo $row['daily_due']; ?></td>
                                <td class="text-center"><?php echo $row['daily_hours'];?></td>
                                <td class="text-center"><?php // echo $row['daily_hours']; ?></td>
                                <td class="text-center"><?php // echo $row['daily_hours']; ?></td>
                                <td class="text-center"><?php
                                    if($row['attend_in'] == 1){ echo "<span class=\"text-success\">Clock in</span>";
                                    }else{ echo "<span class=\"text-danger\">Clock out</span>";
                                    }?>
                                </td>
                                <td class="text-center"><?php  //echo $row['monthly_salary'];?></td>

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