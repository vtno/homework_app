<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';

//find courseID in string "courseID-coursename"
$courseID_name = $_POST['courseID'];
$end = strpos($courseID_name, "-");
$courseID = substr($courseID_name, 0, $end);
$coursename = substr($courseID_name, $end);

//query

$query = "DELETE FROM course WHERE courseID = '" . $courseID . "';";
$query.="DELETE FROM course_has_user WHERE username = '" . $_SESSION['username'] . "';";

if ($cn->multi_query($query) === TRUE) {
    echo "<h1>Hooray!<small>&nbsp; You have been unregistered from " . $coursename . " .<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"main.php\">Back to list -></a>";
} else {
    echo "<h1>Oops!<small>&nbsp; Something went wrong. Please try again.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"main.php\">Back to list -></a>";
}
