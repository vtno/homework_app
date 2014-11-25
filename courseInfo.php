<?php
include_once 'common/headerLogin.php';
include_once 'connectServer.php';
$username = $_SESSION['username'];
?>

<div class="row">
    <div class="col-lg-5"><h2>Courses Information</h2></div>
</div>
<div class="row">
    <div class="col-lg-5"><h4>All Courses: <small>Information of users who take these courses</small></h4></div>
</div>
<?php
//query courses
$sql = "SELECT * FROM course C";
$result = $cn->query($sql);
while ($row = mysqli_fetch_array($result)) {
    $count = 1;
    $courseID = $row['courseID'];
    ?>
    <table class ="table table-striped">
        <thead>
        <h3><?php echo $row['courseID'] . " - " . $row['courseName']; ?><small>&nbsp;&nbsp;instructed by <em> 
            <?php
            //query for professor name
            $query = "SELECT * FROM professor P JOIN professor_teach_course PC WHERE PC.courseID = '$courseID' AND PC.professorID = P.professorID";
            $profNameResult = $cn->query($query);
            while($profName = mysqli_fetch_array($profNameResult)){
                echo $profName['professorName']." ".$profName['professorSurname']." ";
            }
                ?></em></small></h3>
        <td>#</td><td>Username</td><td>Name</td><td>Surname</td><td>Gmail</td><td>Hotmail</td><td>Other Email</td>
        <td>Facebook</td><td>Line ID</td><td>Mobile Number</td>
    </thead>
    <?php
    

    //query username in courses.
    $sql2 = "SELECT * FROM course_has_user CU JOIN user U WHERE CU.courseID = '$courseID' AND U.username = CU.username";
    $sql3 = "SELECT * FROM course_has_user CU JOIN user U JOIN user_email E JOIN user_social S "
            . "JOIN user_phone_number P JOIN user_identity I WHERE I.username = U.username "
            . "AND E.username = U.username AND S.username = U.username AND P.username = U.username "
            . "AND CU.courseID = '$courseID' AND U.username = CU.username";
    $usernameResult = $cn->query($sql2);
    $nameResult = $cn->query($sql3);
    if (!$nameResult) {
    printf("Error: %s\n", mysqli_error($cn));
    exit();
}
    while ($usernameInfo = mysqli_fetch_array($usernameResult)) {
        $userInfo = mysqli_fetch_array($nameResult);
        $username = $usernameInfo['username'];
        if(is_null($username)){
            $username="kuykuykuykyukyukyu";
        }
        $name = $userInfo['name'];
        $surname = $userInfo['surname'];
        $gmail = $userInfo['gmail_email'];
        $hotmail = $userInfo['hotmail_email'];
        $other_email = $userInfo['other_email'];
        $facebook = $userInfo['facebook'];
        $line = $userInfo['line'];
        $mobile = $userInfo['mobile'];
            echo "<tr><td>$count</td><td> $username </td><td>$name</td><td>$surname</td><td>$gmail</td>"
                    . "<td>$hotmail</td><td>$other_email</td><td>$facebook</td><td>$line</td><td>$mobile</td></tr>";
            $count +=1;
        
    }
    ?>


    </table>

    <?php
}
mysqli_close($cn);
?>