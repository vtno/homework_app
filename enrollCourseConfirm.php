<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$username = $_SESSION['username'];
$courseID = $_POST['courseID'];
//check if already has course

    $query = "INSERT IGNORE course_has_user(courseID,username) VALUES ('$courseID','$username')";
    if ($cn->query($query)) {
        echo "<h1>Hooray!<small>&nbsp; You have registered course.<br><br>";
        echo "<a class = \"btn btn-default\" href = \"main.php\">Back to list -></a>";
    } else {
        echo "<h1>Oops!<small>&nbsp; Something went wrong. Please try again.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Back to list -></a>";
    }
mysqli_close($cn);
