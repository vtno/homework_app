<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';
//find courseID in string "courseID-coursename"
$courseID_name = $_POST['courseID'];
$end = strpos($courseID_name, "-");
$courseID = substr($courseID_name, 0, $end);
$coursename = substr($courseID_name, $end);
//query
$status = $_POST['status'];
$username = $_SESSION['username'];
$taskname = $_POST['taskName'];
$query = "UPDATE task SET status = '" . $status . "' WHERE task.username ='" . $username . "'"
        . "AND task.courseID = '" . $courseID . "' AND task.taskName = '" . $taskname . "'";

//check if the task and the course is sync with the db or not
$check = "SELECT taskName FROM task WHERE task.username ='$username'"
        . "AND task.courseID = '" . $courseID . "' AND task.taskName = '" . $taskname . "'";
$checkResult = $cn->query($check);
if ($checkResult -> num_rows >0) {
    $cn->query($query);
    echo"<div class = \"col-lg-12\">
         <h2>Task status has been updated</h2>
         <a href =\"main.php\" class=\"btn btn-default btn-lg\">Back to list-></a>
         </div>";
   
} else {
     echo"<div class=\"col-lg-12\">
          <h2>Oops<small> Please make sure that the task for the course are relavant.</small></h2>
          <a href =\"main.php\" class=\"btn btn-default btn-lg\">Back to list-></a>
          </div>";
}
?> 

