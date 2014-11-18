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
  echo "SUCCESS";   
} else {
    echo "FAIL";
}
?>
