<?php
session_start();
session_destroy();
session_unset();


$_SESSION['username'] = "";
$_SESSION['per_day'] = "";
$_SESSION['employee_name'] ="";
$_SESSION['cal_as_per'] = "";
$_SESSION['hour_due'] ="";
$_SESSION['monthly_salary'] ="";
$_SESSION['per_hour'] = "";
$_SESSION['designation'] = "";
$_SESSION['day_starttime'] = "";
$_SESSION['grace_time'] = "";
header("Location: login.php");