<div class="container-fluid " >
    <div class="row" >
        <div class="col-sm-4">
            <img class='img-responsive ' style="margin-left:0px;margin-top:5px;height:50px;width:350px"  src="pic/bglogo3.png">
            
        </div>
        <div class="col-sm-4">
            <!--            <label style='padding:10px; color:green;font-family:cursive'>
            <?php
            if (isset($_SESSION['uname'])) {
                echo "Welcome sdljfdalknfsdlfkjsaldk " . $_SESSION['uname'];
            }
            echo "Welcome Rishu Mahiwal";
            ?>
                        </label>-->
        </div>
        <div class="col-sm-4">
            <a href="login.php"><button type="submit" name="btnlogin" class="btn bg-primary" style="margin:10px;float:right;">Login/Signup</button></a>
        </div>
    </div>
</div>
<nav class="navbar-default" >
    <div class="container-fluid" style="background-color:#1ab744;font-family:verdana;">
        <div class="col-sm-1"></div>
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
                <li><a style='color:white;font-size:15px' href="Contact-Us.php">Contact Us</a>
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
