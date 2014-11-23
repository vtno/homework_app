<?php
include_once 'connectServer.php';
include_once 'common/headerLoginPage.php';
session_start();
$username = $_SESSION['username'];

//query for name surname gmail hotmail othermail facebook line mobile home
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

$nameArray = $name['name'];
$surnameArray = $name['surname'];
$gmailArray = $mail['gmail_email'];
$hotmailArray = $mail['hotmail_email'];
$othermailArray = $mail['other_email'];
$facebook = $social['facebook'];
$line= $social['line'];
$mobile = $phone['mobile'];
$home = $phone['home'];
?>
<div class="col-lg-12">
    <h1>Edit your personal information</h1>
</div>
<div class ="col-lg-4">
    <form role="form" method = "POST" action="editProfileConfirm.php">
        <div class="form-group">
            <label for="inputUsername">Name</label>
            <input type="text" class="form-control"  placeholder="<?php echo $nameArray ?>" name = "name">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Surname</label>
            <input type="text" class="form-control"  placeholder="<?php echo $surnameArray ?>" name ="surname">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Gmail</label>
            <input type="email" class="form-control"  placeholder="<?php echo $gmailArray ?>" name ="gmail">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Hotmail</label>
            <input type="email" class="form-control"  placeholder="<?php echo $hotmailArray ?>" name ="hotmail">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Other email</label>
            <input type="email" class="form-control"  placeholder="<?php echo $othermailArray ?>" name ="othermail">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Facebook</label>
            <input type="" class="form-control"  placeholder="<?php echo $facebook ?>" name ="facebook">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Line ID</label>
            <input type="text" class="form-control"  placeholder="<?php echo $line ?>" name ="line">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Mobile Phone</label>
            <input type="text" class="form-control"  placeholder="<?php echo $mobile ?>" name ="mobile">
        </div>
        <div class="form-group">
            <label for="inputPassword1">Home Phone</label>
            <input type="text" class="form-control"  placeholder="<?php echo $home ?>" name ="home">
        </div>
        <input type="submit" class="btn btn-default" value="Submit">
        <a class="btn btn-default" href = "userProfile.php">Cancel</a>
    </form>
</div>


