<?php include "includes/header.php" ; ?>
<div class="container">
    <?php $all_users = users_data(); ?>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th class="text-center">Employee Name</th>
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
            <td><?php  echo $row['day_starttime'];?></td>
            <td><?php  echo $row['grace_time'];?></td>
            <td><?php  echo $row['hours_due'];?></td>
            <td><?php  echo $row['per_day'];?></td>
            <td><?php  echo $row['per_hour'];?></td>
            <td><?php  echo $row['monthly_salary'];?></td>
            <td><a href="<?php  echo $row['id'];?>">Edit</a></td>
        </tr>
     <?php }?>
    </tbody>
</table>
</div>



<?php include "includes/footer.php" ; ?>





