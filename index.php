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
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="application/json" href="css/bootstrap.css.map"/>
        <link rel="stylesheet" type="application/json" href="bootstrap.css.map"/>
        <link rel="stylesheet" type="application/json" href="bootstrap.min.css.map"/>
        <link rel="stylesheet" type="application/json" href="bootstrap-theme.min.css.map"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            .navbar-collapse .navbar-nav > li:hover {

                background:green;
            }
            .thumbnail > a > img {
                opacity: 1;
            }
            .thumbnail > a > img:hover {
                opacity: 0.9;
            }
            .zoom > a > img {
                padding: 0px;
                background-color: green;
                transition: transform .2s; /* Animation */
                width: 200px;
                height: 200px;
                margin: 0 auto;
            }

            .zoom > a > img:hover {
                transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }

        </style>  

    </head>
    <body>
        <?php
        include("navTemplate.php");
        ?>
        <div class="container-fluid">
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active" >
                            <img class="img-responsive" style='width:100%;height:300px;' src="pic/education.jpg">
                            <div class="carousel-caption">
                                <h3>Birendra Educational</h3>
                                <p>Focusing to Educate Society</p>
                            </div>
                        </div>

                        <div class="item">
                            <img class="img-responsive" style='width:100%;height:300px;' src="pic/ngo.jpg">
                            <div class="carousel-caption">
                                <h3> Birendra Social Trust</h3>
                                <p>Focusing to Help Society</p>
                            </div>
                        </div>

                        <div class="item">
                            <img class="img-responsive" style='width:100%;height:300px;' src="pic/industry.jpg">
                            <div class="carousel-caption">
                                <h3>Birendra Industry</h3>
                                <p>Focusing To Build Infrastructure </p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="row" style="margin-bottom:50px;margin-top: 50px">
                <div class="col-sm-8" style="padding-left:30px;padding-right:30px;padding-bottom:20px;padding-top:20px">
                    <div class="container-fluid">
                        <h2 style="color:#182e52;">About Us</h2>
                        <hr></hr>
                        <p class='text-justify'>We are Birendra group, a NGO that aims to help society in the field of education and social services under the board Birendra Educational and Social Trust abbreviated as BEST. At the same time we run industry based on aluminium and fiber under the name Prince Aluminium and Fiber Industry.
                            Common Service Center and Home Decoration Work are some highlights of the Birendra group unit. At times we launch different social welfare schemes to make the society a better to live.<a  style="text-decoration:underline;" href="BirendraGroup-About-Us.php">More</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="padding-left:30px;padding-right:30px;padding-bottom:20px;padding-top:20px">

                    <button class="btn" style="background-color:#095A5A;">
                        <h3 style="color:white;font-family: cursive">Mr.Praveen Kumar Suman</h3>
                        <img class="img-responsive " style='width:40%;height:auto;margin-left:auto;margin-right:auto;border: 2px solid #086969' src="pic/praveen.png" alt="alt"/>
                        <p style="color:yellow">(Founder of 'Best')</p>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <hr style="height:2px;background-color:#1ab744;"></hr>
                </div>
                <div class="col-sm-2"><h2 class="text-center" style="color:red">Our Services</h2>
                </div>
                <div class="col-sm-5">
                    <hr style="height:2px;background-color:#1ab744;"></hr>
                </div>
            </div>
            <div class="row" style="margin-bottom:50px;margin-top: 50px">
                <div class="col-md-4">
                    <div class="thumbnail zoom" class="mask"
                         style="
                         background: linear-gradient(
                         45deg,
                         rgba(29, 236, 197, 0.5),
                         rgba(91, 14, 214, 0.5) 100%
                         );
                         ">
                        <a href="BirendraGroup-Educational-KYP.php">
                            <img class="img-responsive" style='width:100%;height:300px;' src="pic/education1.jpg">
                        </a>
                        <div class="caption">
                            <h3 class="text-center" style="color:red;font-family: Indie Flower;">Birendra Group Educational</h3>
                            <p class="text-justify" style="color:black;">Our group is doing well in educating fellow students.In macroeconomics, an industry is a branch of an economy that produces a closely-related set of raw materials, goods, or services. For example, one might refer to the wood industry or to the insurance industry.In macroeconomics, an industry is a branch of an economy that produces a closely-related set of raw materials, goods, or services. For example, one might refer to the wood industry or to the insurance industry.</p>
                            <a class="link-danger" style="text-decoration:underline;" href="BirendraGroup-Educational.php">Learn more</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail zoom" class="mask"
                         style="
                         background: linear-gradient(
                         45deg,
                         rgba(29, 236, 197, 0.5),
                         rgba(91, 14, 214, 0.5) 100%
                         );
                         ">
                        <a href="BirendraGroup-Social-Trust-Mission-Prakritik-Sanrakshak.php">
                            <img class="img-responsive" style='width:100%;height:300px;' src="pic/ngo1.jpg">
                        </a>
                        <div class="caption">
                            <h3 class="text-center" style="color:red;font-family: Indie Flower;">Birendra Group Trust</h3>
                            <p class="text-justify" style="color:black;">Our group is doing well in educating fellow students.In macroeconomics, an industry is a branch of an economy that produces a closely-related set of raw materials, goods, or services. For example, one might refer to the wood industry or to the insurance industry.In macroeconomics, an industry is a branch of an economy that produces a closely-related set of raw materials, goods, or services. For example, one might refer to the wood industry or to the insurance industry.</p>
                            <a class="link-danger" style="text-decoration:underline;" href="BirendraGroup-Social-Trust.php">Learn more</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail zoom" class="mask"
                         style="
                         background: linear-gradient(
                         45deg,
                         rgba(29, 236, 197, 0.5),
                         rgba(91, 14, 214, 0.5) 100%
                         );
                         ">
                        <a href="BirendraGroup-Industry-Steel-factory.php">
                            <img class="img-responsive" style='width:100%;height:300px;' src="pic/industry1.jpg">
                        </a>
                        <div class="caption">
                            <h3 class="text-center" style="color:red;font-family: Indie Flower;">Birendra Group Industry</h3>
                            <p class="text-justify" style="color:black;">Our group is doing well in educating fellow students.In macroeconomics, an industry is a branch of an economy that produces a closely-related set of raw materials, goods, or services. For example, one might refer to the wood industry or to the insurance industry.In macroeconomics, an industry is a branch of an economy that produces a closely-related set of raw materials, goods, or services. For example, one might refer to the wood industry or to the insurance industry.</p>
                            <a class="link-danger" style="text-decoration:underline;" href="BirendraGroup-Industry.php">Learn more</a>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            include("footerTemplate.php");
            ?>
        </div>
    </body>
</html>
