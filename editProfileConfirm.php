<?php

include_once 'common/headerLogin.php';
include_once 'connectServer.php';

//fetch data
$username = $_SESSION['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$gmail = $_POST['gmail'];
$hotmail = $_POST['hotmail'];
$othermail = $_POST['othermail'];
$facebook = $_POST['facebook'];
$line = $_POST['line'];
$mobile = $_POST['mobile'];
$home = $_POST['home'];

//query for if no data
$checkName = "SELECT COUNT(name) FROM user_identity I WHERE I.username = '$username'";
$checkSurname = "SELECT COUNT(surname) FROM user_identity I WHERE I.username = '$username'";
$checkGmail = "SELECT COUNT(gmail_email) FROM user_email E WHERE E.username = '$username'";
$checkHotmail = "SELECT COUNT(hotmail_email) FROM user_email E WHERE E.username = '$username'";
$checkOthermail = "SELECT COUNT(other_email) FROM user_email E WHERE E.username = '$username'";
$checkFacebook = "SELECT COUNT(facebook) FROM user_social S WHERE S.username ='$username'";
$checkLine = "SELECT COUNT(line) FROM user_social S WHERE S.username ='$username'";
$checkMobile = "SELECT COUNT(mobile) FROM user_phone_number P WHERE P.username ='$username'";
$checkHome = "SELECT COUNT(home) FROM user_phone_number P WHERE P.username ='$username'";

$nameResult = $cn->query($checkName);
$surnameResult = $cn->query($checkSurname);
$gmailResult = $cn->query($checkGmail);
$hotmailResult = $cn->query($checkHotmail);
$othermailResult = $cn->query($checkOthermail);
$facebookResult = $cn->query($checkFacebook);
$lineResult = $cn->query($checkLine);
$mobileResult = $cn->query($checkMobile);
$homeResult = $cn->query($checkHome);

//get array from SQL
$nameArray = mysqli_fetch_array($nameResult);
$surnameArray = mysqli_fetch_array($surnameResult);
$gmailArray = mysqli_fetch_array($gmailResult);
$hotmailArray = mysqli_fetch_array($hotmailResult);
$othermailArray = mysqli_fetch_array($othermailResult);
$facebookArray = mysqli_fetch_array($facebookResult);
$lineArray = mysqli_fetch_array($lineResult);
$mobileArray = mysqli_fetch_array($mobileResult);
$homeArray = mysqli_fetch_array($homeResult);

//if no data insert else update

if ($nameArray['COUNT(name)'] > 0) {
    
    //update if input not null
    if ($name != "") {
        $update = "UPDATE user_identity SET name = '$name' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>NAME updated</h3><br>";
        
    } 
} else {
    //insert
    if ($name != "") {
        $insert = "INSERT INTO user_identity(name, username) VALUES ('$name','$username') ON DUPLICATE KEY UPDATE name ='$name'";
        $cn->query($insert);
        echo "<h3>NAME updated</h3><br>";
    }
}
if ($surnameArray['COUNT(surname)'] > 0) {
    
    //update
    if ($surname != "") {
        $update = "UPDATE user_identity SET surname = '$surname' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>SURNAME updated</h3><br>";
    }
} else {
    
    //insert
     if ($surname != "") {
        $insert = "INSERT INTO user_identity(surname, username) VALUES ('$surname','$username') ON DUPLICATE KEY UPDATE surname ='$surname'";
        $cn->query($insert);
        echo "<h3>SURNAME updated</h3><br>";
    }
}
if ($gmailArray['COUNT(gmail_email)'] > 0) {
    
    //update
    if ($gmail != "") {
        $update = "UPDATE user_email SET gmail_email = '$gmail' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>GMAIL updated</h3><br>";
    }
} else {
    
    //insert
    if ($gmail != "") {
        $insert = "INSERT INTO user_email(gmail_email, username) VALUES ('$gmail','$username') ON DUPLICATE KEY UPDATE gmail_email ='$gmail'";
        $cn->query($insert);
        echo "<h3>GMAIL updated</h3><br>";
    }
}
if ($hotmailArray['COUNT(hotmail_email)'] > 0) {
    
    //update
    if ($hotmail != "") {
        $update = "UPDATE user_email SET hotmail_email = '$hotmail' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>HOTMAIL updated</h3><br>";
    }
} else {
    
    //insert
    if ($hotmail != "") {
        $insert = "INSERT INTO user_email(hotmail_email, username) VALUES ('$hotmail','$username') ON DUPLICATE KEY UPDATE hotmail_email ='$hotmail'";
        $cn->query($insert);
        echo "<h3>HOTMAIL updated</h3><br>";
    }
}
if ($othermailArray['COUNT(other_email)'] > 0) {
    //update
    if ($othermail != "") {
        $update = "UPDATE user_email SET other_email = '$othermail' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>OTHER MAIL updated</h3><br>";
    }
} else {
    //insert
    if ($othermail != "") {
        echo "enter if";
        $insert = "INSERT INTO user_email(other_email, username) VALUES ('$othermail','$username') ON DUPLICATE KEY UPDATE other_email ='$othermail'";
        $cn->query($insert);
        echo "<h3>OTHER MAIL updated</h3><br>";
    }
}
if ($facebookArray['COUNT(facebook)'] > 0) {
    //update
    if ($facebook != "") {
        $update = "UPDATE user_social SET facebook = '$facebook' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>FACEBOOK updated</h3><br>";
    }
} else {
    //insert
     if ($facebook != "") {
        $insert = "INSERT INTO user_social(facebook, username) VALUES ('$facebook','$username') ON DUPLICATE KEY UPDATE facebook ='$facebook'";
        $cn->query($insert);
        echo "<h3>FACEBOOK updated</h3><br>";
    }
}
if ($lineArray['COUNT(line)'] > 0) {
    //update
    if ($line != "") {
        $update = "UPDATE user_social SET line = '$line' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>LINE updated</h3><br>";
    }
} else {
    //insert
     if ($line != "") {
        $insert = "INSERT INTO user_social(line, username) VALUES ('$line','$username') ON DUPLICATE KEY UPDATE line ='$line'";
        $cn->query($insert);
        echo "<h3>LINE updated</h3><br>";
    }
}
if ($mobileArray['COUNT(mobile)'] > 0) {
    
    //update
    if ($mobile != "") {
        $update = "UPDATE user_phone_number SET mobile = '$mobile' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>MOBILE PHONE updated</h3><br>";
    }
} else {
    //insert
     if ($mobile != "") {
        $insert = "INSERT INTO user_phone_number(mobile, username) VALUES ('$mobile','$username') ON DUPLICATE KEY UPDATE mobile ='$mobile'";
        $cn->query($insert);
        echo "<h3>MOBILE PHONE updated</h3><br>";
    }
}
if ($homeArray['COUNT(home)'] > 0) {
   
    //update
    if ($home != "") {
        $update = "UPDATE user_phone_number SET home = '$home' WHERE username = '$username'";
        $cn->query($update);
        echo "<h3>HOME PHONE updated</h3><br>";
    }
} else {
 
    //insert
     if ($home != "") {
        $insert = "INSERT INTO user_phone_number(home, username) VALUES ('$home','$username') ON DUPLICATE KEY UPDATE home ='$home'";
        $cn->query($insert);
        echo "<h3>HOME PHONE updated</h3><br>";
    }
    
} 
?>
<a href='userProfile.php' class ='btn btn-default'>Back to profile</a>