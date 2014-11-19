<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
?>
<div class ="col-lg-5">
    <h2>Delete Course</h2>
    <div>
        <h4>WARNING: <br><small>If you delete courses that have tasks all of them will also be deleted.</small></h4> 
    </div>
    <form role ="form" action="deleteCourseConfirm.php" method ="POST"> 
    <div class="form-group">
        <label for="courseID_name">Course ID - Course Name</label>
        <select class="form-control" name ="courseID">
            <?php
            //get courses from DB
            $query = "SELECT * FROM course C, course_has_user CU WHERE CU.username = '" . $_SESSION['username'] . "' "
                    . "AND C.courseID = CU.courseID";
            $result = $cn->query($query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<option>" . $row['courseID'] . " - " . $row['courseName'] . "</option>";
            }
            mysqli_close($cn);
            ?>
        </select>
    </div>
    <div class="form-group">
        <input type ="submit" class="btn btn-danger" value ="Delete from course">
        <a class = "btn btn-default" href = "main.php">Cancel</a>
    </div>
</form>
</div>