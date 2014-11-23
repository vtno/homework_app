<?php
$username = $_SESSION['username'];
//query for info
$nameSql = "SELECT * FROM user_identity I WHERE I.username = '$username'";
$mailSql = "SELECT * FROM user_email E WHERE E.username = '$username'";
$socialSql = "SELECT * FROM user_social S WHERE S.username = '$username'";
$phoneSql = "SELECT * FROM user_phone_number P WHERE P.username = '$username'";

$nameResult = $cn->query($nameSql);
$mailResult = $cn->query($mailSql);
$socialResult = $cn->query($socialSql);
$phoneResult = $cn->query($phoneSql);
$name = mysqli_fetch_array($nameResult);
$mail = mysqli_fetch_array($mailResult);
$social = mysqli_fetch_array($socialResult);
$phone = mysqli_fetch_array($phoneResult);
?>
<div class ="row">
    <div class ="col-lg-5">
        <h1>Info for username: <strong><em><?php echo strtoupper($username); ?></h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table class ="table table-striped center">
                                <thead><td><strong>Name</strong></td><td><strong>Surname</strong></td><td><strong>Gmail</strong></td><td><strong>Hotmail</strong></td><td><strong>Other Mail</strong></td><td><strong>Facebook</strong></td>
                                <td><strong>Line</strong></td><td><strong>Mobile Number</strong><td><strong>Home Number</strong></td></thead>
                                <?php
                                echo "<td>" . $name['name'] . "</td><td>" . $name['surname'] . "</td>"
                                . "<td><strong>" . $mail['gmail_email'] . "</td><td><strong>" . $mail['hotmail_email'] . "</td>"
                                . "<td><strong>" . $mail['other_email'] . "</td><td><strong>" . $social['facebook'] . "</strong></td>"
                                . "<td><strong>" . $social['line'] . "</td><td><strong>" . $phone['mobile'] . "</td><td><strong>" . $phone['home'] . "</strong></td>";
                                ?>
                            </table>
                            <a class = "btn btn-warning btn-lg" href = "editProfile.php">Edit Profile</a>
                            <a class = "btn btn-default btn-lg" href = "main.php">Back to list</a>
                        </div>
                    </div>
                    </div>



