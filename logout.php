<?php
session_start();
session_destroy();
include_once 'common/header.php';
?>
<div class="col-lg-9">
    <h1>Log out successful<br>
        <Small>Thank you for using homework application</Small></h1>
</div>
<div class="col-lg-3">
    <a class = "btn btn-default btn-lg" href = "login.php">Go to log in page -></a>
</div>


