<div class = "add-bar-wrap">
    <form role ="form" action="courseInfo.php" method="POST">
        <a class = "btn btn-success btn-lg" href = "addCourse.php">Register Course</a>
        <?php
        $query = "SELECT COUNT(courseID) FROM course_has_user C WHERE C.username ='" . $username . "'";
        $result = $cn->query($query);
        $count = mysqli_fetch_assoc($result);
        if ($count['COUNT(courseID)'] > 0) {
            echo"<input type =\"submit\" class = \"btn btn-warning btn-lg\" value=\"Course Info\">";
        }
        ?>

        <a class = "btn btn-danger btn-lg" href = "deleteCourse.php">Unregistere Course</a>
    </form>
</div>


