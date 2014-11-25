<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$username = $_SESSION['username'];
$coursename = $_POST['courseName'];
$courseID = $_POST['courseID'];
$professorName = $_POST['professorName'];
$professorsur = $_POST['professorSur'];
$e1 = $_POST['professorEmail'];
$e2 = $_POST['professorOtherEmail'];
//check if already has course

$query = "SELECT COUNT(courseID) FROM course C WHERE C.courseID = '$courseID'";
$result = $cn->query($query);
 $count = mysqli_fetch_assoc($result);
     if(empty($courseID)||empty($coursename)){
         echo '<script type="text/javascript">alert("Please input coursename and courseID.");window.history.go(-1);</script>';
    }
if ($count['COUNT(courseID)'] > 0) {
    echo "<h1>Oops!<small>&nbsp;You have already register for this course.<br><br>";
    echo "<a class = \"btn btn-danger\" href = \"main.php\">Back to list -></a>";
} else {
//add course
    $query = "INSERT IGNORE INTO course(courseID,courseName) VALUES ('" .$courseID . "','" . $coursename . "');";
    $query .= "INSERT IGNORE professor(professorID,professorName,professorSurname) VALUES ('$courseID','$professorName','$professorsur');";
    $query .= "INSERT IGNORE professor_teach_course(professorID,courseID) VALUES ('$courseID','$courseID');";
    $query .= "INSERT IGNORE prof_email(main_email,other_email,professorID) VALUES ('$e1','$e2','$courseID');";   
    if ($cn->multi_query($query) === True) {
        echo "<h1>Hooray!<small>&nbsp; You have registered " . $coursename . " course.<br><br>";
        echo "<a class = \"btn btn-default\" href = \"main.php\">Back to list -></a>";
    } else {
        echo "<h1>Oops!<small>&nbsp; Something went wrong. Please try again.<br><br>";
        echo "<a class = \"btn btn-danger\" href = \"main.php\">Back to list -></a>";
    }
}
mysqli_close($cn);
