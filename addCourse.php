<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Course</title>
    </head>
    <body>
        <?php
        include_once 'common/headerLogin.php';
        ?>
        <div class ="col-lg-4">
            <form role ="form" action ="addCourseConfirm.php" method = "POST">
                <div class="form-group">
                    <label for="inputCourse">Course Name</label>
                    <input type ="text" class="form-control" name ="courseName" placeholder="course name...">
                </div>
                <div class="form-group">
                    <label for="inputTask">Course ID</label>
                    <input type ="text" class="form-control" name ="courseID" placeholder="course ID...">
                </div>
                <div class="form-group">
                    <input type ="submit" class="btn btn-success" value ="Register course!">
                    <a class = "btn btn-danger" href = "main.php">Cancel</a>
                </div>
            </form>
        </div>
    </body>
</html>
