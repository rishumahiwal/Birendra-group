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
        <?php
        include("navTemplate.php");
        ?>  
        <div class="Container-fluid" style="height:100%;">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h3 class="text-center" >&nbsp;&nbsp;<label style="color:red">Already Registered !!</label> - <label style="color:#1ab744">Log In</label></h3>
                    <hr align="center" width ="99%" size="1px" color="white">
                    <form  method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3" align="center" style="margin-top:10px;">
                                    <div style="padding:7px;"><label for="voterid" >E-mail</label></div>
                                </div>

                                <div class="col-sm-9">
                                    <div style="padding:5px;">
                                        <input type="text" required name="txtpwd" class="form-control" id="q1">
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
                                        <input type="text" required name="txtpwd" class="form-control" id="q1">
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
                                        echo "<a class='btn btn-danger' href='index.php'>Login</a>";
                                        echo "</div>";
                                    }
                                    ?>
                                    <br>
                                    <a class="link-danger" style="text-decoration:underline;" href="SignUp.php">New User !! - Sign Up </a>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
           
        </div>
    </body>
</html>
