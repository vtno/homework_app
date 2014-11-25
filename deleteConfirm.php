<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';

//find courseID in string "courseID-coursename"
$username = $_SESSION['username'];
$delete = $_POST['taskID'];
 echo $delete;
//query
$query = "DELETE FROM task WHERE taskID = '$delete' AND  task.username ='$username'";
//check if the task and the course is sync with the db or not
    if ($cn->query($query)) {
        echo "<h1>Hooray!<small>&nbsp;Your task has been deleted from the list.</small></h1><br><br>
      <form action =\"main.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
    } else {
        echo "<h1>Oops!<small>&nbsp;There is some mistake occured. Please try again.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
    }
?>

