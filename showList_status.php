<?php
include_once 'connectServer.php';
?>
<h1>Tasks</h1>
<table class="table table-hover">
    <thead style="font-size:20px; color:red; font-family:neobold; font-size:25px;">
    <td>#</td><td><a href="main.php">Task</td><td>Course Name</td><td>Course ID</td><td><a href="main_deadline.php">Deadline</td><td><a href="main_status.php">Status</td>
</thead>
<!--FETCH FROM DATABASE-->
<?php
$taskQuery = "SELECT * FROM  task T,course C WHERE T.username = '" . $_SESSION['username'] . "'"
        . "AND C.courseID = T.courseID ORDER BY `status` ASC";
if ($result = mysqli_query($cn, $taskQuery)) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr id = \"tr" . $count . "\"><td>$count</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['taskName']}</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['courseName']}</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['courseID']}</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['deadline']}</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['status']}</td></tr>";
        $count+=1;
    }
}
?>

</table>
<?php include_once 'addBar.php'; ?>
<h1>Course Taken</h1>
<table class="table table-hover">
    <thead style="font-size:20px; color:red; font-family:neobold; font-size:25px;">
    <td>#</td><td>Course Name</td><td>Course ID</td><td>Professor</td>
</thead>
<!--FETCH FROM DATABASE-->
<?php
$courseQuery = "SELECT courseName, CU.courseID, professorName FROM course C,course_has_user CU,professor_teach_course PC, professor P
WHERE CU.username = '" . $_SESSION['username'] . "' "
        . "AND C.courseID = CU.courseID AND C.courseID=PC.courseID AND PC.professorID=P.professorID";
if ($result = mysqli_query($cn, $courseQuery)) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr id = \"tr" . $count2 . "\"><td>$count2</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['courseName']}</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['courseID']}</td>";
        echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['professorName']}</td></tr>";
        $count2+=1;
    }
}
?>
</table>
<?php include_once 'addCourseBar.php'; ?>
    