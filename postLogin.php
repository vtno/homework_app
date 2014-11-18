<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
session_start();
if ($_POST['login']) {
    //must check id and password
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $userquery = "SELECT username FROM user WHERE username = '" . $username . "'";
    $passquery = "SELECT password FROM user WHERE password = '" . $password . "'";
    $checkuser = mysqli_query($cn, $userquery);
    $userresult = mysqli_fetch_assoc($checkuser);
    $checkpass = mysqli_query($cn, $passquery);
    $passresult = mysqli_fetch_assoc($checkpass);

    if ($userresult['username'] AND $passresult['password']) {
         $_SESSION['username'] = $username;
        echo"<div class=\"col-lg-9\">
                <h1>Log in successful<br>
                <Small>Welcome ".$username." to homework application</Small></h1>
            </div>
            <div class=\"col-lg-3\">
                <a class = \"btn btn-default btn-lg\" href = \"main.php\">Go to your list -></a>
            </div>";
    } else {
        echo"<div class=\"col-lg-9\">
                <h1>Log in failed<br>
                <Small>Please recheck your username and password</Small></h1>
            </div>
            <div class=\"col-lg-3\">
                <a class = \"btn btn-default btn-lg\" href = \"login.php\">Retry -></a>
            </div>";
    }
}
?>
