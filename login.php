<?php
include_once 'common/header.php';
?>
<br><br><br><br><br>
<h2 class ="center">Homework Application</h2><br><br>
<div class ="col-lg-4"></div>
<div class ="col-lg-4">
    
    <form role ="form" method ="POST" action ="postLogin.php" class="form-horizontal">
        <div class="form-group">
            <div class="col-lg-3">
                <label for ="username"><h4>Username</h4></label>
            </div>
            <div class="col-lg-9">
                <input type ="text" name ="username" class ="form-control" placeholder="username...">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                <label for ="password"><h4>Password</h4></label>
            </div>
            <div class="col-lg-9">
                <input type ="password" name ="password" class ="form-control" placeholder="password...">
            </div>
        </div>
        <input type="submit" name ="login" value="Log in" class ="pull-right btn btn-info btn-lg">
    </form>

</div>
<div class ="col-lg-4"></div>

