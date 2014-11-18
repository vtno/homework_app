<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$username = $_SESSION['username'];
$coursename = $_POST['courseName'];
$courseID = $_POST['courseID'];
$query = "INSERT INTO course(courseID,courseName) VALUES ('".$courseID."','".$coursename."')";
$relQuery = "INSERT INTO course_has_user(courseID,username) VALUES ('".$courseID."','".$username."')";
if($cn->query($query)&&$cn->query($relQuery)){
    echo "<h1>Hooray!<small>&nbsp;Your have registered a new course.</small></h1><br><br>
      <form action =\"main.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
} else {
    $query = "INSERT INTO course_has_user(courseID,username) VALUES ('".$courseID."','".$username."')";
    if($cn->query($query)){
        echo "<h1>Hooray!<small>&nbsp;Your have registered a new course.</small></h1><br><br>
      <form action =\"main.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
    } else {
        echo "<h1>Oops!<small>&nbsp;You have already register for this course.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
    }
}