<?php

include_once 'common/headerLoginPage.php';
include_once 'connectServer.php';
//get data from form
$username = $_POST['username'];
$password = $_POST['password'];



//create user
$addUser = "INSERT INTO user(username,password)VALUES('" . $username . "','" . $password . "') ";
if ($cn->query($addUser)) {
    echo "<h1>DONE!<small> Your profile have been created. Please enter your information.</small></h1>";
    echo "<a href =\"login.php\" class =\"btn btn-default\">Profile Page</a>";
} else {
    echo "<h1>Oops!<small> That username has been taken. Please try new one.</small></h1>";
    echo "<a href =\"register.php\" class =\"btn btn-default\">Try again</a>";
}
?>
