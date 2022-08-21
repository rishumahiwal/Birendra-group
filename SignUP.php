<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Birendra Group</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            .navbar-collapse .navbar-nav > li:hover {

                background:green;
            }
        </style>  

    </head>
    <body>
        <div class="container-fluid" >
            <!--<div class="navbar-header">-->
            <div class="row" style='margin-bottom:10px;' >
                <div class="col-sm-4 navbar-left">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <!--<a class="navbar-brand" style="color:yellow;font-family:cursive;" href="index.php">e-Voting</a>-->
                    <?php
                    if (isset($_SESSION['utype'])) {
                        echo "<a class='navbar-brand' style='color:red;font-family:Helvetica;' href='index2.php'><label>Birendra</label><label style='color:#1ab744;'>Group</label></a>";
                    } else {
                        echo "<a class='navbar-brand'  href='index.php'><label style='color:red;font-family:Helvetica;font-size:30px;font-weight:bold;'>Birendra</label> <label style='color:#1ab744;font-family:Helvetica;font-size:30px;font-weight:bold;'>Group</label><br><label style='color:#28349c;font-family:Helvetica;font-size:11px;'>Birendra Educational & Social Trust(Best)</label><br></a>";
                    }
                    ?>
                </div>
                <div class="col-sm-4 navbar-center">
                    <!--            <label style='padding:10px; color:green;font-family:cursive'>
                    <?php
                    if (isset($_SESSION['uname'])) {
                        echo "Welcome sdljfdalknfsdlfkjsaldk " . $_SESSION['uname'];
                    }
                    echo "Welcome Rishu Mahiwal";
                    ?>
                                </label>-->
                </div>
                <div class="col-sm-4 navbar-right">
                    <a href="index.php"><button type="submit" name="btnlogin" class="btn bg-primary" style="margin:10px;float:right;">Home</button></a>
                </div>
            </div>
            <!--</div>-->
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid" style="background-color:#1ab744">
                <div class="col-sm-2" ></div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">
                        <!--<li class="active"><a href="index.php">Home</a></li>-->
                        <?php
                        if (isset($_SESSION['utype'])) {
                            echo "<li class='active'><a href='index2.php'>Home</a></li>";
                        } else {
                            echo "<li  ><a style='color:white;font-size:15px' href='index.php'>Home</a></li>";
                        }
                        ?>


                        <?php
                        echo "<li class='dropdown'>";
                        echo "<a class='dropdown-toggle' data-toggle='dropdown' style='color:white;font-size:15px' href='#'>Admin <span class='caret'></span></a>";
                        echo "<ul style='background-color:#1ab744' class='dropdown-menu'>";
                        echo "<li><a href='Category_list.php'>Category List</a></li>";
                        echo "<li><a href='Voting_list.php'>Voting List</a></li>";
                        echo "<li><a href='Users.php'>Users</a></li>";
                        echo "<li><a href='New_voter.php'>Add New Voter</a></li>";
                        echo "</ul>";
                        echo "</li>";
                        ?>

                        <li ><a style='color:white;font-size:15px' href="Result.php">About Us</a></li>
                        <li><a style='color:white;font-size:15px' href="Result.php">Contact Us</a>
                        </li>
                        <?php
                        if (isset($_SESSION['uname'])) {
                            echo "<li class='active'><a href='logout.php' onclick='return confirm(\"Are you sure to log out?\")'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="Container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h3 class="text-center" >&nbsp;&nbsp;<label style="color:red">New User</label> - <label style="color:#1ab744">Sign Up</label></h3>
                    <hr align="center" width ="99%" size="1px" color="white">
                    <form  method="post" onsubmit="return validateForm()">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-3" align="center" style="margin-top:10px;">
                                    <div style="padding:7px;"><label for="voterid" >Name</label></div>
                                </div>

                                <div class="col-sm-9">
                                    <div style="padding:5px;">
                                        <input type="text" required name="txtname" class="form-control" id="vid" placeholder="Enter Your Full Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3" align="center" style="margin-top:10px;">
                                    <div style="padding:7px;"><label for="voterid" >E-mail</label></div>
                                </div>

                                <div class="col-sm-9">
                                    <div style="padding:5px;">
                                        <input type="text" required name="email" class="form-control" id="e1" placeholder="Enter Your Email">
                                        <label id="a1" style="color:red"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3" align="center" style="margin-top:10px;">
                                    <div style="padding:7px;"><label for="voterid" >Password</label></div>
                                </div>

                                <div class="col-sm-9">
                                    <div style="padding:5px;">
                                        <input type="text" required name="txtpwd" class="form-control" id="q1" placeholder="Set Your Password">
                                        <label id="a1" style="color:red"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3" align="center" style="margin-top:10px;">
                                </div>

                                <div class="col-sm-9">
                                   
                                    <?php
                                    if (isset($_SESSION['utype'])) {
                                        if ($_SESSION['utype'] == 'admin') {
                                            echo "<div style='padding:5px;'>";
                                            echo "<input type='submit' name='btnreg' id='vid4' value='Register' style='background-color:red;border:0;'>";
                                            echo "</div>";
                                        } else {
                                            echo "<div style='padding:5px;'>";
                                            echo "<font class='btn btn-danger'>You are not a Admin</font>";
                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<div style='padding:5px;'>";
                                        echo "<a class='btn btn-danger' href='index.php'>Register</a>";
                                        echo "</div>";
                                    }
                                    ?>
                                    <br>
                                    <a class="link-danger" style="text-decoration:underline;" href="login.php">Already Registered !! - LogIn </a>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3"></div>

                </body>
                </html>
