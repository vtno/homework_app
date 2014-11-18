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
        <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email.." name = "email">
        </div>
        <div class="form-group">
            <label for="inputFacebook">Facebook</label>
            <input type="text" class="form-control" placeholder="Enter facebook name.." name ="facebook">
        </div>
         <div class="form-group">
            <label for="inputEmail">Phone Number</label>
            <input type="text" class="form-control" placeholder="Enter email.." name = "phone_number">
        </div>
        <input type="submit" class="btn btn-default" value="Submit">
        <a class="btn btn-default" href = "index.php">Cancel</a>
    </form>
</div>