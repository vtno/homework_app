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
            <form role ="form" action ="addCourseConfirm.php" method = "POST">
                <div class="form-group">
                    <label for="inputCourse">Course Name</label>
                    <input type ="text" class="form-control" name ="courseName" placeholder="course name...">
                </div>
                <div class="form-group">
                    <label for="inputTask">Course ID</label>
                    <input type ="number" class="form-control" name ="courseID" placeholder="course ID...">
                </div>
                <div class="form-group">
                    <label for="inputTask">Professor Name</label>
                    <input type ="text" class="form-control" name ="professorName" placeholder="Prof. name...">
                </div>
                <div class="form-group">
                    <label for="inputTask">Professor Surname</label>
                    <input type ="text" class="form-control" name ="professorSur" placeholder="Prof. sur...">
                </div>
                       <div class="form-group">
                    <label for="inputTask">Professor email</label>
                    <input type ="email" class="form-control" name ="professorEmail" placeholder="Prof. sur...">
                </div>
                       <div class="form-group">
                    <label for="inputTask">other Professor email</label>
                    <input type ="email" class="form-control" name ="professorOtherEmail" placeholder="Prof. sur...">
                </div>
                <div class="form-group">
                    <input type ="submit" class="btn btn-success" value ="Register course!">
                    <a class = "btn btn-danger" href = "main.php">Cancel</a>
                </div>
            </form>
        </div>
    </body>
</html>