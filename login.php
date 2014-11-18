<?php
include_once 'common/header.php';
?>
<div class ="col-lg-4"></div>
<div class ="col-lg-4 center">
    <form role ="form" method ="POST" action ="postLogin.php">
        <div class="form-group">
            <Label for ="username">Username</label>
            <input type ="text" name ="username" placeholder="username...">
        </div>
        <div class="form-group">
            <Label for ="password">Password</label>
            <input type ="password" name ="password" placeholder="password...">
        </div>
        <input type="submit" name ="login" value="Log in">
    </form>

</div>
<div class ="col-lg-4"></div>

