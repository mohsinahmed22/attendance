<?php

function db_query($query){
    global $connection;
    $db_query = mysqli_query($connection, $query);
    return $db_query;
}


function db_fetch_data($query, $table){
    global $connection;
    $db_data = db_query($query." ".$table);
    return $db_data;

}

// Login
function attendnace($sign){
    $attendance  = db_query($sign);
    if($attendance){return true;}
}
function user_attendnace($user_id){
    $user_attend = db_query("SELECT * FROM daily_attendance WHERE user_id = $user_id ORDER BY  daily_id DESC");
//    print_r($user_attend);
    return $user_attend;
}

function attendnace_signin($clock, $date, $user_id){
    $query = "INSERT INTO daily_attendance(user_id, check_in, daily_date, attend_in) 
              VALUES($user_id, '$clock', '$date', 1)";
    attendnace($query);

}
function attendnace_signout($clockin, $clockout, $date, $user_id, $daily_due){
    $datetime1 = date_create($clockin);
    $datetime2 = date_create($clockout);
    $interval = date_diff($datetime1, $datetime2);
    $hours =  $interval->format('%h:%i Hrs');
    if($hours< $daily_due){
        echo $short_hrs = strtotime($daily_due) - strtotime($hours);
        echo $hrs_sh = $short_hrs->format('%h:%i Hrs');
    }
    $query = ("UPDATE daily_attendance SET 
                check_out = '$clockout',
                attend_in = 0,
                daily_hours = '$hours',
                daily_due = $daily_due,
                WHERE attend_in= 1 AND 
                user_id = $user_id AND 
                daily_date = '$date' 
                ");
    attendnace($query);
}


// Users Section
function users_data(){
    $all_users = db_fetch_data("select * from", "users");
    return $all_users;

}
//Single User Section
function single_user_data($username, $password){
    $user_found = mysqli_fetch_assoc(db_query("SELECT * FROM users WHERE username = '$username' AND users_password = '$password' "));
//    print_r($user_found);
    if($user_found){
        return $user_found;
    }else{ return false;}
}

// Single User
function user_data($id){
    $user = mysqli_fetch_assoc(db_query("select * from users where id = $id"));
    return $user;

}

function add_new_user($data = array()){
    $employee_name = $data['employee_name'];
    $designation = $data['designation'];
    $hours_due = $data['hours_due'];
    $cal_as_per = $data['cal_as_per'];
    $day_starttime = $data['day_starttime'];
    $endTime = strtotime($day_starttime) + 2700;
    $grace_time = date('h:i:s', $endTime);
    $monthly_salary = $data['monthly_salary'];
    $per_day = round($data['monthly_salary']/$cal_as_per,2);
    $per_hour = round($data['monthly_salary']/$cal_as_per/$hours_due, 2);


    $query = "INSERT INTO users (employee_name, hours_due, day_starttime, grace_time, monthly_salary, per_day, per_hour, cal_as_per, designation) ";
    $query .= "VALUES( '$employee_name', '$hours_due', '$day_starttime', '$grace_time', '$monthly_salary', '$per_day', '$per_hour', '$cal_as_per', '$designation')";

    $query_new_user = db_query($query);
    if($query_new_user){ return true;}
}

function edit_user($data = array()){
    $user_id = $data['user_id'];
    $employee_name = $data['employee_name'];
    $designation = $data['designation'];
    $hours_due = $data['hours_due'];
    $cal_as_per = $data['cal_as_per'];
    $day_starttime = $data['day_starttime'];
    $endTime = strtotime($day_starttime) + 2700;
    $grace_time = date('h:i:s', $endTime);
    $monthly_salary = $data['monthly_salary'];
    $per_day = round($data['monthly_salary']/$cal_as_per,2);
    $per_hour = round($data['monthly_salary']/$cal_as_per/$hours_due, 2);


    $query = "UPDATE users SET employee_name = '$employee_name' , hours_due = '$hours_due', day_starttime = '$day_starttime',  ";
    $query .= "grace_time = '$grace_time' , monthly_salary = '$monthly_salary', per_day = '$per_day', per_hour = '$per_hour', cal_as_per = '$cal_as_per', designation = '$designation' ";
    $query .= "WHERE id = $user_id";


    $query_edit_user = db_query($query);
    if($query_edit_user){ return true;}
}