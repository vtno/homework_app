<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';

//find courseID in string "courseID-coursename"
$username = $_SESSION['username'];
$taskname = $_POST['taskName'];
$courseID_name = $_POST['courseID'];
$end = strpos($courseID_name, "-");
$courseID = substr($courseID_name, 0, $end);
$coursename = substr($courseID_name, $end);
$delete = $_POST['taskName'];

//query
$query = "DELETE FROM task WHERE taskName = '" . $delete . "'AND task.courseID = '" . $courseID . "' AND  task.username ='" . $username . "'";
//check if the task and the course is sync with the db or not
$check = "SELECT courseID FROM task T WHERE T.username ='$username' AND T.taskName ='$taskname'"
        . "AND T.courseID = '$courseID'";
$checkResult = $cn->query($check);
if ($checkResult->num_rows > 0) {
    if ($cn->query($query) === TRUE) {
        echo "<h1>Hooray!<small>&nbsp;Your task has been deleted from the list.</small></h1><br><br>
      <form action =\"main.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
    } else {
        echo "<h1>Oops!<small>&nbsp;There is some mistake occured. Please try again.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
    }
} else {
    echo"<div class=\"col-lg-12\">
          <h2>Oops<small> Please make sure that the task and the course are relavant.</small></h2>
          <a href =\"main.php\" class=\"btn btn-default btn-lg\">Back to list-></a>
          </div>";
}
?>

