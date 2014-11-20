<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
?>
<div class="col-lg-4">
    <form role ="form" action ="updateConfirm.php" method="POST">
        <h2>Please choose task to update</h2>
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
            <label for="inputTask">Course ID - Course Name</label>
            <select class="form-control" name ="courseID">
                <?php
                //get courses from DB
                $query = "SELECT * FROM course C, course_has_user CU WHERE CU.username = '" . $_SESSION['username'] . "' "
                        . "AND C.courseID = CU.courseID";
                $result = $cn->query($query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option>" . $row['courseID'] . "-" . $row['courseName'] . "</option>";
                }
                ?>
            </select>
        </div>
        <h2>Update task status</h2>

        <div class="form-group">
            <select class="form-control" name ="status">
                <option>Not yet started</option>
                <option>On going</option>
                <option>Done</option>
            </select>
        </div>
        <div class="form-group pull-right">
            <input type ="submit" class="btn btn-success" value ="Update">
            <a class = "btn btn-danger" href = "main.php">Cancel</a>
        </div>
    </form>

</div>