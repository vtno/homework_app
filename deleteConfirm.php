<?php

include_once 'common/header.php';
include_once 'connectServer.php';

$delete = $_POST['taskName'];
$query = "DELETE FROM task WHERE taskName = '".$delete."'";
if ($cn->query($query) === TRUE) {
    echo "<h1>Hooray!<small>&nbsp;Your task has been deleted from the list.</small></h1><br><br>
      <form action =\"index.php\" method=\"link\">
      <input class =\"btn btn-default\" type= \"submit\" value =\"Back to list\">
      </form>";
} else {
    echo "<h1>Oops!<small>&nbsp;There is some mistake occured. Please try again.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"index.php\">Cancel</a>";
}?>

