<?php
    include_once 'common/header.php';
?>
<form role ="form"action ="deleteConfirm.php " method = "POST">
    <label>Delete Task Name</label>
    <input type ="text" placeholder="task name" name ="taskName">
    <input type ="submit" class="btn btn-danger" value ="Delete from list">
</form>
