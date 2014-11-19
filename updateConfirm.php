<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';

$status = $_POST['status'];
$username = $_SESSION['username'];
$query = "UPDATE task SET status = '" . $status . "' WHERE task.username ='" . $username . "'";

if ($cn->query($query) === TRUE) {
    echo"<div class=\"col-lg-12\">
                <h2>Task status has been updated</h2>
                <a href =\"main.php\" class=\"btn btn-default btn-lg\">Back to list-></a>
        </div>";
} else {
    echo"<div class=\"col-lg-12\">
                <h2>Oops<small> some error has occur please try again.</small></h2>
                <a href =\"main.php\" class=\"btn btn-default btn-lg\">Back to list-></a>
        </div>";
}
?> 

