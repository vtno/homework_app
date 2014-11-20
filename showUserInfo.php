<?php
$username = $_SESSION['username'];
//query for info
$query = "SELECT * FROM user WHERE username = '$username'";
$result = $cn->query($query);
?>
<div class ="row">
    <div class ="col-lg-4">
        <h1><?php echo strtoupper($username); ?> Info</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class ="table table-striped center">
                <thead><td><strong>Name</td><td><strong>Surname</td><td><strong>E-mail</td><td><strong>Facebook</td><td><strong>Line</td><td><strong>Phone Number</strong></td></thead>
                <?php echo "<td><strong>Name</td><td><strong>Surname</td><td><strong>E-mail</td><td><strong>Facebook</td><td><strong>Line</td><td><strong>Phone Number</strong></td>"?>
            </table>
        </div>
    </div>
</div>



