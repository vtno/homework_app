<?php
    session_start();
    include_once 'common/headerLogin.php';
?>
<form role ="form"action ="deleteConfirm.php " method = "POST">
    <label>Delete Task Name</label>
    <input type ="text" placeholder="task name" name ="taskName">
    <input type ="submit" class="btn btn-danger" value ="Delete from list">
    <a class = "btn btn-default" href = "index.php">Cancel</a>
</form>
