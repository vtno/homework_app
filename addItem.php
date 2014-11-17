<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Task</title>
    </head>
    <body>
        <?php 
            include_once 'common/header.php';
        ?>
        <form role ="form" action ="addConfirm.php" method = "POST">
            <div class="form-group">
                <label for="inputTask">Task Name</label>
                <input type ="text" class="form-control" name ="taskName" placeholder="your task...">
            </div>
            <div class="form-group">
                <label for="inputTask">Course Name</label>
                <input type ="text" class="form-control" name ="courseName" placeholder="course name...">
            </div>
             <div class="form-group">
                <label for="inputTask">Deadline(YYYY/MM/DD)</label>
                <input type ="text" class="form-control" name ="deadline" placeholder="deadline...">
            </div>
            <div class="form-group">
                <label for="inputTask">Status</label>
                <input type ="text" class="form-control" name ="status" placeholder="status...">
            </div>
            <div class="form-group">
                <input type ="submit" class="btn btn-success" value ="Add to list">
                <a class = "btn btn-danger" href = "index.php">Cancel</a>
            </div>
        </form>
    </body>
</html>
