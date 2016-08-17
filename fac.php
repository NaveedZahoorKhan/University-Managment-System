<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="bootstrap/js/jquery.min.js"></script>
        <link href="materialize/css/materialize.css" rel="stylesheet">
        
        <script src="materialize/js/materialize.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="stylesheet/css/bootstrap-material-design.min.css">
        <script src="script/js/material.js"></script>
        <script src="script/js/ripples.js"></script>
        <link href="stylesheet/icon.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
        <title>Faculty</title>
        <style>
            hr
            {
                color: royalblue;
                background-color: royalblue ;
            }
        </style>
    </head>
    <body>
        <div class="bs-component" style="background-color: #00aced">
          <div class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <i class="material-icons">&#xE896;</i>
                </button>
                <a class="navbar-brand" href="javascript:void(0)">Site Name Here</a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a></li>
                    <li class="active"><a href="#">Faculty</a></li>
                  <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle active" data-toggle="dropdown">Contact US
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu active">
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left">
                  <div class="form-group">
                    <input type="text" class="form-control col-md-8" placeholder="Search">
                  </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (count($_COOKIE) > 0 and isset($_COOKIE["uname"])) {
                       
                        ?>
                    
                    <li class="dropdown"><a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <?= $_COOKIE["uname"] ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout </a> </li>
                        </ul>
                    
                    </li>
                    <?php
    
                    } 
                    ?>
                    
                 </ul>
              </div>
            </div>
          </div>
        </div>
    

        
        <?php
        // put your code here
        ?>
        <br>
        <div style="margin-top: 60px; width: 60%;margin-left: 20%">
            <img class="img img-responsive img-thumbnail pull-left" src="image/male-default.png" width="20%">
            <h3>Faculty 1</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
<hr>
        </div>
        
        <div style="margin-top: 60px; width: 60%;margin-left: 20%">
            <img class="img img-responsive img-thumbnail pull-left" src="image/male-default.png" width="20%">
            <h3>Faculty 2</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        <hr>    
        </div>
        
        
        
        <div style="margin-top: 60px; width: 60%;margin-left: 20%">
            <img class="img img-responsive img-thumbnail pull-left" src="image/male-default.png" width="20%">
            <h3>Faculty 3</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <hr>
        </div><div style="margin-top: 60px; width: 60%;margin-left: 20%">
            <img class="img img-responsive img-thumbnail pull-left" src="image/male-default.png" width="20%">
            <h3>Faculty 4</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
<hr>
        </div>
    </body>
</html>
