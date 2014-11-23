<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Task</title>
    </head>
    <body>
        <?php
        include_once 'common/headerLogin.php';
        include_once 'connectServer.php';
        ?>
        <div class ="col-lg-4">
            <form role ="form" action ="addConfirm.php" method = "POST">
                <div class="form-group">
                    <label for="inputTask">Task Name</label>
                    <input type ="text" class="form-control" name ="taskName" placeholder="your task...">
                </div>
                <div class="form-group">
                    <label for="inputTask">Course Name</label>
                    <select class="form-control" name ="courseName">
                        <?php
                        $username = $_SESSION['username'];
                        //check if have course or not
                        $query = "SELECT COUNT(courseID) FROM course_has_user C WHERE C.username ='" . $username . "'";
                        $result = $cn->query($query);
                        $course_count = mysqli_fetch_assoc($result);
                        //if have
                        if ($course_count['COUNT(courseID)'] > 0) {
                            //get courses from DB
                            $query = "SELECT * FROM course C, course_has_user CU WHERE CU.username = '" . $username . "' "
                                    . "AND C.courseID = CU.courseID";
                            $result = $cn->query($query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option>" . $row['courseName'] . "</option>";
                            }
                        } else {
                            echo "<option>PLEASE REGISTER A COURSE FIRST</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputTask">Deadline(YYYY/MM/DD)</label>
                    <input type ="date" class="form-control" name ="deadline" placeholder="deadline...">
                </div>
                <div class="form-group">
                    <label for="inputTask">Status</label>
                    <select class="form-control" name ="status">
                        <option>Not yet started</option>
                        <option>On going</option>
                        <option>Done</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type ="submit" class="btn btn-success" value ="Add to list">
                    <a class = "btn btn-danger" href = "main.php">Cancel</a>
                </div>
            </form>
        </div>
    </body>
</html>
