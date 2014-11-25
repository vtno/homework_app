<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Course</title>
    </head>
    <body>
        <?php
        include_once 'common/headerLogin.php';
        include_once 'connectServer.php';
        ?>
        <div class ="col-lg-4">
            <form role ="form" action ="enrollCourseConfirm.php" method = "POST">
                <div class="form-group">
                    <label for = "registask">course list</label>
                    <select class="form-control" name ="courseID">
                        <?php
                        //get courses from DB
                        $query = "SELECT* FROM course C";
                        $result = $cn->query($query);
                        while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['courseID'] ."'>".$row['courseName']."-".$row['courseID']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type ="submit" class="btn btn-success" value ="enroll course!">
                    <a class = "btn btn-danger" href = "main.php">Cancel</a>
                </div>
            </form>
        </div>
    </body>
</html>