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
                <div class="col-sm-2 text-center" style="border: 2px solid #faaca7;height:auto;background-color:#fff6f5;margin-top:5px;">
                    <h5><a href="BirendraGroup-Educational-KYP.php">KYP</a></h5>
                    <hr align="center" style="height:1px;background-color:#1ab744;"></hr>
                    <h5><a href="BirendraGroup-Educational-Computer-Education.php">Computer Education</a></h5>
                    <hr align="center" style="height:1px;background-color:#1ab744;"></hr>
                    <h5><a href="BirendraGroup-Educational-English-Spoken.php">English Spoken</a></h5>
                    <hr align="center" style="height:1px;background-color:#1ab744;"></hr>
                    <h5><a href="BirendraGroup-Educational-Coaching-Center.php">Coachine Center</a></h5>
                </div>
                <div class="col-sm-8" >
                    <div class="container-fluid">
                        <div class="row" style="margin:5px;background-color: black">
                            <h2 class="text-center" style="color:yellow;">Coaching Center</h2>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3" style="margin:10px;background-color:white">
                                <h1 class="text-center" style="color:pink;">Class 6-8</h1>
                            </div>
                            <div class="col-sm-3" style="margin:10px;background-color:white">
                                <h1 class="text-center" style="color:GREEN;">Class 9-10</h1>
                            </div>
                            <div class="col-sm-3" style="margin:10px;background-color: white">
                                <h1 class="text-center" style="color:RED;">Class 11-12</h1>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <div style="margin:5px;">
                            <h1 class="text-center" style="color:#1ab744"> Batches Coming Soon...</h1>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <hr style="height:2px;background-color:#1ab744;"></hr>
                            </div>
                            <div class="col-sm-4"><h2 class="text-center" style="color:red">Our Batches</h2>
                            </div>
                            <div class="col-sm-4">
                                <hr style="height:2px;background-color:#1ab744;"></hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5" style="margin:5px;background-color:white;border: 2px solid #faaca7;height:auto;">
                                <h1 class="text-center" style="color:green;">Ongoing Batch</h1>
                                <p class="text-center" >12-06-22 to 15-09-22</p>
                                <a class="btn btn-success " style="margin:10px">See Progress</a>
                            </div>
                            <div class="col-sm-5" style="margin:5px;background-color:white;border: 2px solid #faaca7;height:auto;">
                                <h1 class="text-center" style="color:GREEN;">Upcoming Batch</h1>
                                <p class="text-center" >Coming Soon......</p>
                                <a class="btn btn-success " style="margin:10px">Enroll now</a>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 text-center" style="border: 2px solid #faaca7;height:auto;background-color:#fff6f5;margin-top:5px;">
                    <h5><a href="BirendraGroup_Educational-Coachine-Center.php">Notes</a></h5>

                </div>
            </div>
            <?php
            include("footerTemplate.php");
            ?>
        </div>
    </body>
</html>
