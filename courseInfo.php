<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$count = 1;
session_start();
$username = $_SESSION['username'];
$nameQuery = "SELECT * FROM course C, user U, course_has_user CU,"
        . "facebook F,email E,phone_number P WHERE C.courseID = CU.courseID"
        . "AND U.username = '".$username."' AND F.user_username = '".$username."'"
        . "AND E.user_username = '".$username."' AND P.user_username ='".$username."'";
?>
<div class="row">
    <div class="col-lg-5"><h2>Course Information</h2></div>
</div>
<div class="row">
    <div class="col-lg-5"><h4>Student Contacts</h4></div>
</div>
<table class ="table table-striped">
    <thead>
    <td>#</td><td>Username</td><td>Email</td><td>Facebook</td><td>Phone Number</td>
</thead>
<tr><td>1</td><td>dasdsad</td><td>dsadsad</td><td>dsadsad</td><td>123123</td></tr>
</table>
