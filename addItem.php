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
        <form role ="form">
            <div class="form-group">
                <label for="inputTask">Task Name</label>
                <input type ="text" class="form-control" id ="taskName" placeholder="your task...">
            </div>
            <div class="form-group">
                <label for="inputTask">Course Name</label>
                <input type ="text" class="form-control" id ="taskName" placeholder="course name...">
            </div>
             <div class="form-group">
                <label for="inputTask">Deadline</label>
                <input type ="text" class="form-control" id ="taskName" placeholder="deadline...">
            </div>
            <div class="form-group">
                <label for="inputTask">Status</label>
                <input type ="text" class="form-control" id ="taskName" placeholder="status...">
            </div>
        </form>
    </body>
</html>
