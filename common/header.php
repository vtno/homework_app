<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.1.1.min.js"></script>
        <title>Homework App</title>
    </head>
    <body>
        <div class ="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">HOMEWORK APP</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">   
                        <ul class="nav navbar-nav navbar-right">
                            
                            <?php
                            //<!--IF LOGGED OUT-->
                                if($isLogin){
                                    echo "<form role = \"form\" action = \"login.php\">";
                                    echo"<a class=\"btn navbar-btn btn-primary\" href = \"login.php\">Log In</a>";
                                    echo"<a class=\"btn navbar-btn btn-primary\">Register</a>";
                                    echo "</form>";
                                } else {
                            //<!--IF LOGGED IN-->
                                    echo "<button type=\"button\" class=\"btn navbar-btn btn-primary\">Log Out</button>";
                                }
                            ?>
                            
                            
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
       
 