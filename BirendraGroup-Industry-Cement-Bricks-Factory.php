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

        <div class="container-fluid">
            <div class="row" style="margin:25px;">
                <div class="col-sm-2 text-center" style="border: 2px solid #faaca7;height:auto;background-color:#fff6f5">
                    <h5><a href="BirendraGroup-Industry-Steel-Factory.php">Steel Factory</a></h5>
                    <hr align="center" style="height:1px;background-color:#1ab744;"></hr>
                    <h5><a href="BirendraGroup-Industry-Cement-Bricks-Factory.php">Cement-Bricks Factory</a></h5>
                    <hr align="center" style="height:1px;background-color:#1ab744;"></hr>
                    <h5><a href="BirendraGroup-Industry-Kaati-Factory.php">Kaati Factory</a></h5>
                </div>
                <div class="col-sm-8" >
                    <div class="container-fluid">
                        <div class="row" style="margin:5px;">
                            <div class="col-sm-12" style="height:300px;width:100%;background-image: url('pic/cement-brick.jpg');">
                                <div class="row" style="margin:5px;">

                                    <div class="col-sm-7" ></div>
                                    <div class="col-sm-5 text-left" style="background-color:white;margin-top:30px;margin-bottom:30px;padding:20px">
                                        <h6 style="color:#007bff;">Quality Work, Trustable services</h6>
                                        <h2 style="font-family: Rubik Marker Hatch;">We Build Most Reliable Cement-Bricks</h2>
                                        <a class="btn btn-primary" href="BirendraGroup-Industry-Cement-Bricks-Factory.php">Get Started</a>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <hr style="height:2px;background-color:#1ab744;"></hr>
                            </div>
                            <div class="col-sm-4"><h2 class="text-center" style="color:red">Our Products</h2>
                            </div>
                            <div class="col-sm-4">
                                <hr style="height:2px;background-color:#1ab744;"></hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6" style="margin:5px;background-image:url('https://thumbs.dreamstime.com/b/stack-gray-clay-bricks-construction-stack-gray-clay-bricks-construction-isolated-wood-background-131351339.jpg');background-size: 100% 100%;border: 2px solid #faaca7;height:auto;">
                                <h1 class="text-center" style="color:green;">&nbsp;</h1>
                                <a class="btn btn-success " style="margin:10px" href='Contact-Us.php'>Buy Now</a>
                            </div>

                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 text-center" style="border: 2px solid #faaca7;height:auto;background-color:#fff6f5">
                    <h5><a href="BirendraGroup_Educational-KYP.php">Notice</a></h5>
                </div>
            </div>
            <?php
            include("footerTemplate.php");
            ?>
        </div>
    </body>
</html>
