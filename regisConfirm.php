<?php
include_once 'common/header.php';
include_once 'connectServer.php';
//add profile to database
$username =$_POST['username'];
$password =$_POST['password'];
$email =$_POST['email'];
$facebook =$_POST['facebook'];
$phone_number =$_POST['phone_number'];
$addUser = "INSERT INTO user(username,password)VALUE('".$username."','".$password."')";
$addEmail = "INSERT INTO email(email,user_username)VALUE('".$email."','".$username."')";
$addFacebook = "INSERT INTO facebook(accountName,user_username)VALUE('".$facebook."','".$username."')";
$addPhone = "INSERT INTO phone_number(phone_number,user_username)VALUE('".$phone_number."','".$username."')";

if($cn->query($addUser)&&$cn->query($addEmail)&&$cn->query($addFacebook)&&$cn->query($addPhone)){
  echo "<h1>DONE!<small> Your profile have been created.</small></h1>";
  echo "<a href =\"login.php\" class =\"btn btn-default\">Log in</a>";
} else {
    echo "<h1>Oops!<small> Something went wrong. Please try again.</small></h1>";
    echo "<a href =\"register.php\" class =\"btn btn-default\">Try again</a>";
}
?>
