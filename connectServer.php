<?php
//connect to database
$server = "localhost";
$db_name = "homework_app";
$user = "root";
$pass = "";
$cn = mysqli_connect($server, $user, $pass);
mysqli_select_db($cn,$db_name);
$count = 1;
if (!$cn) {
    echo "cannot connect to server";
    exit;
}
//echo 'STATUS: Connected to server<br>';
?>
