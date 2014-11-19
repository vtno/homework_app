<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
?>

<div class ="col-lg-4">
    <h2>Delete task</h2>
    <form role ="form"action ="deleteConfirm.php " method = "POST">
        <div class="form-group">
            <label for = "deleteTask">Task Name</label>
            <select class="form-control" name ="taskName">
                <?php
                //get courses from DB
                $query = "SELECT * FROM course C, task T WHERE T.username = '" . $_SESSION['username'] . "' "
                        . "AND C.courseID = T.courseID";
                $result = $cn->query($query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option>" . $row['taskName'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="inputTask">Course Name</label>
            <select class="form-control" name ="courseName">
                <?php
                //get courses from DB
                $query = "SELECT * FROM course C, course_has_user CU WHERE CU.username = '" . $_SESSION['username'] . "' "
                        . "AND C.courseID = CU.courseID";
                $result = $cn->query($query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option>" . $row['courseName'] . "</option>";
                }
                mysqli_close($cn);
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type ="submit" class="btn btn-danger" value ="Delete from list">
            <a class = "btn btn-default" href = "main.php">Cancel</a>
        </div>
    </form>
</div>