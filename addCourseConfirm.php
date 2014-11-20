<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$username = $_SESSION['username'];
$coursename = $_POST['courseName'];
$courseID = $_POST['courseID'];

//check if already has course

$query = "SELECT courseID FROM course_has_user CU WHERE CU.courseID = '$courseID' AND CU.username = '$username'";
$result = $cn->query($query);
if ($result->num_rows > 0) {
    echo "<h1>Oops!<small>&nbsp;You have already register for this course.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"main.php\">Back to list -></a>";
} else {
//add course
    $query = "INSERT IGNORE INTO course(courseID,courseName) VALUES ('" .$courseID . "','" . $coursename . "');";
    $query .= "INSERT IGNORE course_has_user(courseID,username) VALUES ('" . $courseID . "','" . $username . "');";
    if ($cn->multi_query($query) === True) {
        echo "<h1>Hooray!<small>&nbsp; You have registered " . $coursename . " course.<br><br>";
        echo "<a class = \"btn btn-default\" href = \"main.php\">Back to list -></a>";
    } else {
        echo "<h1>Oops!<small>&nbsp; Something went wrong. Please try again.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Back to list -></a>";
    }
}
mysqli_close($cn);
