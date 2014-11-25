<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$query = "SELECT courseID FROM course WHERE courseName = '" . $_POST['courseName'] . "'";
$result = mysqli_query($cn, $query);
$courseID = mysqli_fetch_assoc($result);
$username = $_SESSION['username'];
$taskname = $_POST['taskName'];
$deadline = $_POST['deadline'];
$status = $_POST['status'];
if(empty($taskname)||empty($courseID)||empty($deadline)){
    if(empty($taskname)){
 echo '<script type="text/javascript">alert("Please input task name.");window.history.go(-1);</script>';
}
 if(empty($courseID)){
    echo '<script type="text/javascript">alert("Please register course first.");window.history.go(-1);</script>';
 }
 if(empty($deadline)){
    echo '<script type="text/javascript">alert("Please select the date.");window.history.go(-1);</script>';
 }
}else{
//check if task is already added [name,courseID,deadline]
$checkTask = "SELECT taskName FROM task WHERE task.taskname = '$taskname' AND task.username = '$username' AND "
        . "task.courseID = '" . $courseID['courseID'] . "' AND task.deadline = '$deadline'";
$checkResult = $cn->query($checkTask);
if ($checkResult->num_rows > 0) {
    echo "<h1>Oops!<small>&nbsp;This task is already in the list.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
} else {
    $insert = "INSERT INTO task(taskName,deadline,status,courseID,username) VALUES ('$taskname','$deadline',"
            . "'$status','" . $courseID['courseID'] . "','" . $username . "')";
    if (mysqli_query($cn, $insert)) {
        echo "<h1>Hooray!<small>&nbsp;Your task has been added to the list.</small></h1><br><br>
      <form action =\"main.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
        mysqli_close($cn);
    } else {
        echo "<h1>Oops!<small>&nbsp;Your course does not exist in database.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
    }
}
}
?>


