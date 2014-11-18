<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$query = "SELECT courseID FROM course WHERE courseName = '" . $_POST['courseName'] . "'";
$result = mysqli_query($cn, $query);
$courseID = mysqli_fetch_assoc($result);
$username = $_SESSION['username'];

if ($result) {

    $insert = "INSERT INTO task(taskName,deadline,status,courseID,username) VALUES ('" . $_POST['taskName'] . "','" . $_POST['deadline'] . "',"
            . "'" . $_POST['status'] . "','" . $courseID['courseID'] . "','".$username."')";
    if (mysqli_query($cn, $insert)) {
        echo "<h1>Hooray!<small>&nbsp;Your task has been added to the list.</small></h1><br><br>
      <form action =\"main.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
    } else {
        echo "<h1>Oops!<small>&nbsp;Your course does not exist in database.&nbsp;&nbsp;Please register new course.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
    }
    mysqli_close($cn);
} else {
    echo "<h1>Oops!<small>&nbsp;Your course does not exist in database.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
}
?>


