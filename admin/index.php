<?php include "includes/admin_header.php" ; ?>
        <!-- Navigation -->
<?php
date_default_timezone_set("Asia/Karachi");
$checkin_date = date("Y-m-d");
?>

<?php if(isset($_POST['signin'])) {
}?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <?php

                    function time_elapsed_A($secs){
                        $bit = array(
                            'y' => $secs / 31556926 % 12,
                            'w' => $secs / 604800 % 52,
                            'd' => $secs / 86400 % 7,
                            'h' => $secs / 3600 % 24,
                            'm' => $secs / 60 % 60,
                            's' => $secs % 60
                        );

                        foreach($bit as $k => $v)
                            if($v > 0)$ret[] = $v . $k;

                        return join(' ', $ret);
                    }


                    function time_elapsed_B($secs){
                        $bit = array(
                            ' year'        => $secs / 31556926 % 12,
                            ' week'        => $secs / 604800 % 52,
                            ' day'        => $secs / 86400 % 7,
                            ' hour'        => $secs / 3600 % 24,
                            ' minute'    => $secs / 60 % 60,
                            ' second'    => $secs % 60
                        );

                        foreach($bit as $k => $v){
                            if($v > 1)$ret[] = $v . $k . 's';
                            if($v == 1)$ret[] = $v . $k;
                        }
                        array_splice($ret, count($ret)-1, 0, 'and');
                        $ret[] = 'ago.';

                        return join(' ', $ret);
                    }




//                    $nowtime = time();
//                    $oldtime = 1335939007;
//
//                    echo "time_elapsed_A: ".time_elapsed_A($nowtime-$oldtime)."\n";
//                    echo "time_elapsed_B: ".time_elapsed_B($nowtime-$oldtime)."\n";

                    /** Output:
                    time_elapsed_A: 6d 15h 48m 19s
                    time_elapsed_B: 6 days 15 hours 48 minutes and 19 seconds ago.
                     **/
                    ?>


                    <?php
//                    echo $today = time() . '</br>';                 // March 10, 2001, 5:16 pm
//                                        echo $today = time() . '</br>';
//                    echo $today = date("F j, Y, g:i a") . '</br>';                 // March 10, 2001, 5:16 pm
//                    echo $today = date("m.d.y"). '</br>';                         // 03.10.01
//                    echo $today = date("j, n, Y") . '</br>';                       // 10, 3, 2001
//                    echo $today = date("Ymd") . '</br>';                           // 20010310
//                    echo $today = date('h-i-s, j-m-y, it is w Day') . '</br>';     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
//                    echo $today = date('\i\t \i\s \t\h\e jS \d\a\y.') . '</br>';   // it is the 10th day.
//                    echo $today = date("D M j G:i:s T Y") . '</br>';               // Sat Mar 10 17:16:18 MST 2001
//                    echo $today = date('H:m:s \m \i\s\ \m\o\n\t\h') . '</br>';     // 17:03:18 m is month
//                    echo $today = date("H:i:s") . '</br>';                         // 17:16:18
//                    echo $today = date("Y-m-d H:i:s") . '</br>';                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

                    ?>
                    <div class="col-md-12">
                    <form action="index.php" method="post">
                        <?php if(isset($_POST['signin'])){
                            $checkin_time = date("H:i:s");
                            $_SESSION['checkin_date'] = $checkin_date;
                            $_SESSION['checkin'] = $checkin_time;
                            attendnace_signin($checkin_time, $checkin_date, $_SESSION['id']);
                            echo  "<p>Checkin Time: $checkin_time, $checkin_date </p>";


                        ?>
                            <button name="signin" class="btn btn-success hide">Clock In</button>
                            <button name="clock-brb" class="btn btn-danger">Be Right Back</button>
                            <button name="signout" class="btn btn-danger">Clock Out</button>
                        <?php }elseif(isset($_POST['signout'])) {
                            $checkout_time = date("H:i:s");
                            $_SESSION['checkout'] = $checkout_time;
                            attendnace_signout($_SESSION['checkin'], $checkout_time, $checkin_date, $_SESSION['id'], $_SESSION['hours_due']);
                            echo "<p>Last Login Time: $checkout_time, $checkin_date </p>";
                            $_SESSION['checkin'] = ""
                            ?>

                            <button name="signin" class="btn btn-success ">Clock In</button>
                            <button name="signout" class="btn btn-danger hide">Clock Out</button>
                            <?php
                        }elseif (!empty($_SESSION['checkin'])) {
                            echo "<p>Checkin Time:" . $_SESSION['checkin'] . " , " . $checkin_date . "</p>";
                            ?>
                            <button name="signin" class="btn btn-success hide">Clock In</button>
                            <button name="clock-brb" class="btn btn-danger">Be Right Back</button>
                            <button name="signout" class="btn btn-danger">Clock Out</button>
                            <?php
                            }elseif (!empty($_POST['clock-brb'])){
                                $checkout_brb_time = date("H:i:s");
                                $_SESSION['checkout_brb'] = $checkout_brb_time;

                            ?>
                                <button name="signin" class="btn btn-success hide">Clock In</button>
                                <button name="clock-back" class="btn btn-success">I am Back</button>
                            <?php

                        }else{
                            $_SESSION['checkin_date'] = "";
                            $_SESSION['checkin'] = "";
                            $_SESSION['checkout'] = "";
                            ?>

                            <button name="signin" class="btn btn-success">Clock In</button> <?php } ?>
                    </form>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ; ?>