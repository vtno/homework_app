<?php
include_once 'connectServer.php';
?>
<table class="table table-hover">
    <thead>
    <td>#</td><td>Task</td><td>Course</td><td>Deadline</td><td>Status</td>
</thead>
<!--FETCH FROM DATABASE-->
<?php
$courseQuery = "SELECT * FROM course C, task T WHERE C.courseID = T.courseID";
$result = mysqli_query($cn, $courseQuery);

while ($row = mysqli_fetch_array($result)) {
    echo "<tr id = \"tr".$count."\"><td>$count</td>";
    echo "<td>{$row['taskName']}</td>";
    echo "<td>{$row['courseName']}</td>";
    echo "<td>{$row['deadline']}</td>";
    echo "<td>{$row['status']}</td></tr>";
    $count+=1;
}
mysqli_close($cn);
?>
</table>
