<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';
//find courseID in string "courseID-coursename"
//query
$status = $_POST['status'];
$username = $_SESSION['username'];
$taskname = $_POST['taskName'];
$query = "UPDATE task SET status='$status' WHERE task.username='$username' AND task.taskID='$taskname'";
     
     if ($cn->query($query)) {
    echo"<div class = \"col-lg-12\">
         <h2>Task status has been updated</h2>
         <a href =\"main.php\" class=\"btn btn-default btn-lg\">Back to list-></a>
         </div>";
       }
?> 

