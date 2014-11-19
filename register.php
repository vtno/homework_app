<?php
include_once 'common/header.php';
include_once 'connectServer.php';
?>

<div class="col-lg-12">
    <h1>Please Register Your Information</h1>
</div>
<div class ="col-lg-4">
    <form role="form" method = "POST" action="regisConfirm.php">
        <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control"  placeholder="Enter username.." name = "username">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Password</label>
            <input type="password" class="form-control"  placeholder="Enter password.." name ="password">
        </div>
        <input type="submit" class="btn btn-default" value="Submit">
        <a class="btn btn-default" href = "index.php">Cancel</a>
    </form>
</div>