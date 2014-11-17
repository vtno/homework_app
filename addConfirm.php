<?php

include_once 'common/header.php';
include_once 'connectServer.php';
$query = "SELECT courseID FROM course WHERE courseName = '" . $_POST['courseName'] . "'";
$result = mysqli_query($cn, $query);
$courseID = mysqli_fetch_assoc($result);


if ($result) {

    $insert = "INSERT INTO task(taskName,deadline,status,courseID) VALUES ('" . $_POST['taskName'] . "','" . $_POST['deadline'] . "',"
            . "'" . $_POST['status'] . "','" . $courseID['courseID'] . "')";
    if (mysqli_query($cn, $insert)) {
        echo "<h1>Hooray!<small>&nbsp;Your task has been added to the list.</small></h1><br><br>
      <form action =\"index.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
    } else {
        echo "<h1>Oops!<small>&nbsp;Something went wrong.&nbsp;&nbsp;Please check your information.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"index.php\">Cancel</a>";
    }
    mysqli_close($cn);
} else {
    echo "<h1>Oops!<small>&nbsp;Your course does not exist in database.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"index.php\">Cancel</a>";
}
?>


