<?php
include_once 'connectServer.php';
?>
<h1>Tasks</h1>
<table class="table table-hover">
    <thead>
    <td>#</td><td>Task</td><td>Course Name</td><td>Course ID</td><td>Deadline</td><td>Status</td>
</thead>
<!--FETCH FROM DATABASE-->
<?php
$taskQuery = "SELECT * FROM  task T,course C WHERE T.username = '" . $_SESSION['username'] . "'"
        . "AND C.courseID = T.courseID";
if ($result = mysqli_query($cn, $taskQuery)) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr id = \"tr" . $count . "\"><td>$count</td>";
        echo "<td>{$row['taskName']}</td>";
        echo "<td>{$row['courseName']}</td>";
        echo "<td>{$row['courseID']}</td>";
        echo "<td>{$row['deadline']}</td>";
        echo "<td>{$row['status']}</td></tr>";
        $count+=1;
    }
}
?>

</table>
<?php include_once 'addBar.php'; ?>
<h1>Course Taken</h1>
<table class="table table-hover">
    <thead>
    <td>#</td><td>Course Name</td><td>Course ID</td>
</thead>
<!--FETCH FROM DATABASE-->
<?php
$courseQuery = "SELECT * FROM course C, course_has_user CU WHERE CU.username = '" . $_SESSION['username'] . "' "
        . "AND C.courseID = CU.courseID";
if ($result = mysqli_query($cn, $courseQuery)) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr id = \"tr" . $count2 . "\"><td>$count2</td>";
        echo "<td>{$row['courseName']}</td>";
        echo "<td>{$row['courseID']}</td></tr>";

        $count2+=1;
    }
}
?>
</table>
<?php include_once 'addCourseBar.php'; ?>
    