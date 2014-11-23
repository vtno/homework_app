<?php
$username = $_SESSION['username'];
//query for info
$query = "SELECT * FROM user_social S, user_phone_number P,user_identity I,user_email E WHERE S.username = '$username'"
        . " AND P.username = '$username' AND I.username = '$username' AND E.username = '$username'";
$result = $cn->query($query);
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
                while ($row = mysqli_fetch_array($result)) {
                    echo "<td>".$row['name']."</td><td>".$row['surname']."</td>"
                            . "<td><strong>".$row['gmail_email']."</td><td><strong>".$row['hotmail_email']."</td>"
                            . "<td><strong>".$row['other_email']."</td><td><strong>".$row['facebook']."</strong></td>"
                            . "<td><strong>".$row['line']."</td><td><strong>".$row['mobile']."</td><td><strong>".$row['home']."</strong></td>";
                }
                ?>
            </table>
            <a class = "btn btn-warning btn-lg" href = "editProfile.php">Edit Profile</a>
            <a class = "btn btn-default btn-lg" href = "main.php">Back to list</a>
        </div>
    </div>
</div>



