<?php
$isLogin = True;
//header
include_once 'common/header.php';
$page_title = "Home";


//IF LOGGED IN
if(!$isLogin){
include_once 'showList.php';
include_once 'addBar.php';
}
//IF LOGGED OUT
else {
    echo "<h1>PLEASE LOG IN OR REGISTER :)</h1>";
}
//footer

include_once 'common/footer.php';
?>