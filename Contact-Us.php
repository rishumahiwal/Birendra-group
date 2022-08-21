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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            .navbar-collapse .navbar-nav > li:hover {

                background:green;
            }
            /* Style all font awesome icons */
            .fa {
                padding: 20px;
                font-size: 30px;
                width: 50px;
                text-align: center;
                text-decoration: none;
            }

            /* Add a hover effect if you want */
            .fa:hover {
                opacity: 0.95;
            }

            /* Set a specific color for each brand */

            /* Facebook */
            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            /* Twitter */
            .fa-twitter {
                background: #55ACEE;
                color: white;
            }
        </style>  

    </head>
    <body>
        <?php
        include("navTemplate.php");
        ?>
        <div class="container-fluid" style="background-color:#34495E;width:100%;height:100%;">
            <div class="row" style="margin:50px;background-color:white;width:auto;height:auto;text-align:center">
                <div class="col-sm-6" >
                    <a href="https://www.facebook.com/groups/286019721816675/?ref=share_group_link" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.facebook.com/groups/286019721816675/?ref=share_group_link" target="_blank" class="fa fa-twitter"></a>
                    <h2 style="color:#8F44AD"> Contact Us..... </h2>
                    <br>
                    <p>Mob No :- 9471466819</p>
                    <p class="text-center">AT-South of Chandi Bus Stand,<br> Sarswati Complex Bhagwanpur,<br> Chandi(Nalanda),Bihar <br> zipcode:-803108</p>

                    <br>
                </div>
                <div class="col-sm-6" style="padding:20px">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name">
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="phno" placeholder="Enter Your Mobile Number">
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <textarea id="subject" class="form-control" name="subject" placeholder="Write something.." style="height:80px"></textarea>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class=" col-sm-4" >
                                <button type="submit" class="btn btn-primary" style="margin:5px;">Get in Touch</button>
                            </div>
                            <div class="col-sm-4"><button type="submit" class="btn btn-primary" style="margin:5px;">Queries</button></div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            include("footerTemplate.php");
            ?>
        </div>
    </body>
</html>
