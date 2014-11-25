<?php
include_once 'connectServer.php';
?>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h1>Tasks</h1>
            </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                
                <table class="table table-hover">
                    <thead style="font-size:20px; color:red; font-family:neobold; font-size:25px;" >
                        <td>#</td><td><a href="main.php">Task</td><td>Course Name</td><td>Course ID</td><td><a href="main_deadline.php">Deadline</td><td> <a href="main_status.php">Status</td>
                    </thead>
                    <!--FETCH FROM DATABASE-->
                    <?php
                    $taskQuery = "SELECT * FROM  task T,course C WHERE T.username = '" . $_SESSION['username'] . "'"
                    . "AND C.courseID = T.courseID ORDER BY `taskName` ASC";
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
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h1>Course Taken</h1>
            </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                
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
                    if(empty($row['professorName'])){
                    $row['professorName']="-";
                    }
                    echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['professorName']}</td></tr>";
                    $count2+=1;
                    }
                    }
                    ?>
                </table>
                <?php include_once 'addCourseBar.php'; ?>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h1>Professor info</h1>
            </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                
                <table class="table table-hover">
                    <thead style="font-size:20px; color:red; font-family:neobold; font-size:25px;">
                        <td>#</td><td>prof_name</td><td>course_name</td><td>main_email</td><td>other</td>
                    </thead>
                    <!--FETCH FROM DATABASE-->
                    <?php
                    $courseQuery = "SELECT* FROM course C,professor_teach_course PC, professor P,prof_email PE
                    WHERE PC.courseID=C.courseID AND PC.professorID=P.professorID AND P.professorID=PE.professorID";
                    if ($result = mysqli_query($cn, $courseQuery)) {
                    while ($row = mysqli_fetch_array($result)) {
                    echo "<tr id = \"tr" . $count2 . "\"><td>$count2</td>";
                    echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['professorName']}</td>";
                    echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['courseName']}</td>";
                    echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['main_email']}</td>";
                    echo "<td style=\"font-family:neobold; font-size:22px;\">{$row['other_email']}</td></tr>";
                    $count2+=1;
                    }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>