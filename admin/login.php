<?php ob_start();?>
<?php include 'includes/db.php';?>
<?php include 'includes/function.php';?>
<?php
if(isset($_POST['login'])){
    if($user = single_user_data($_POST['username'],  $_POST['password'])){
         session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['per_day'] = $user['per_day'];
        $_SESSION['employee_name'] = $user['employee_name'];
        $_SESSION['cal_as_per'] = $user['cal_as_per'];
        $_SESSION['hours_due'] = $user['hours_due'];
        $_SESSION['monthly_salary'] = $user['monthly_salary'];
        $_SESSION['per_hour'] = $user['per_hour'];
        $_SESSION['designation'] = $user['designation'];
        $_SESSION['day_starttime'] = $user['day_starttime'];
        $_SESSION['grace_time'] = $user['grace_time'];

        header("Location: index.php");


    }else { echo "<h1>No User found</h1>";
        echo '<h1>'. $_POST['username'].'</h1>';
        echo '<h1>'. $_POST['password'].'</h1>';}

    //header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up for Free</h1>

            <form action="" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                </div>

                <button type="submit" class="button button-block"/>Get Started</button>

            </form>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>

            <form action="" method="post">

                <div class="field-wrap">
                    <label>
                        Username<span class="req">*</span>
                    </label>
                    <input name="username" type="text" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input name="password" type="password"required autocomplete="off"/>
                </div>

                <p class="forgot"><a href="#">Forgot Password?</a></p>

                <button class="button button-block" type="submit" name="login"/>Log In</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="js/index.js"></script>




</body>

</html>
