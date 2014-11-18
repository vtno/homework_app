<?php
session_start();
include_once 'common/headerLogin.php';
include_once 'connectServer.php';

$delete = $_POST['taskName'];
$query = "DELETE FROM task WHERE taskName = '".$delete."'";
if ($cn->query($query) === TRUE) {
    echo "<h1>Hooray!<small>&nbsp;Your task has been deleted from the list.</small></h1><br><br>
      <form action =\"main.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
} else {
    echo "<h1>Oops!<small>&nbsp;There is some mistake occured. Please try again.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"main.php\">Cancel</a>";
}?>

