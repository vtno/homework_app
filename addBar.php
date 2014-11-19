<div class = "add-bar-wrap">
   
    <a class = "btn btn-success btn-lg" href = "addItem.php">Add Task</a>
     <?php
        $username = $_SESSION['username'];
        $query = "SELECT COUNT(taskName) FROM task WHERE task.userName = '".$username."'";
        $result = $cn->query($query);
        $count = mysqli_fetch_assoc($result);
        if($count['COUNT(taskName)']>0){
            echo"<a class = \"btn btn-warning btn-lg\" href = \"updateItem.php\">Update</a>";
        }
    ?>
    
    <a class = "btn btn-danger btn-lg" href = "deleteItem.php   ">Delete</a>
</div>

