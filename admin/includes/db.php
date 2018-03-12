<?php
define('LOCALHOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'atten_db');


$connection = mysqli_connect(LOCALHOST, USERNAME, PASSWORD, DBNAME);
if(!$connection){die("Connection Faild" . mysqli_error());}