<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
        <script src="bootstrap/js/jquery.min.js"></script>
        <link href="materialize/css/materialize.css" rel="stylesheet">
        
        <script src="materialize/js/materialize.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="stylesheet/css/bootstrap-material-design.min.css">
        <script src="script/js/material.js"></script>
        <script src="script/js/ripples.js"></script>
        <link href="stylesheet/icon.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
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
                  <li><a href="faculty.php">Faculty</a></li>
                  <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle active" data-toggle="dropdown">Contact US
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu active">
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
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
        <h1 class="text-info" style="margin-top: 60px">About Us</h1>
        <div class="pull-left">
            <div class="pull-left col-md-6">
                
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            
            
                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
            
            
                Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
            
                Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
          
               Aliquam vehicula sem ut pede. Cras purus lectus, egestas eu, vehicula at, imperdiet sed, nibh. Morbi consectetuer luctus felis. Donec vitae nisi. Aliquam tincidunt feugiat elit. Duis sed elit ut turpis ullamcorper feugiat. Praesent pretium, mauris sed fermentum hendrerit, nulla lorem iaculis magna, pulvinar scelerisque urna tellus a justo. Suspendisse pulvinar massa in metus. Duis quis quam. Proin justo. Curabitur ac sapien. Nam erat. Praesent ut quam.
          
          
                Vivamus commodo, augue et laoreet euismod, sem sapien tempor dolor, ac egestas sem ligula quis lacus. Donec vestibulum tortor ac lacus. Sed posuere vestibulum nisl. Curabitur eleifend fermentum justo. Nullam imperdiet. Integer sit amet mauris imperdiet risus sollicitudin rutrum. Ut vitae turpis. Nulla facilisi. Quisque tortor velit, scelerisque et, facilisis vel, tempor sed, urna. Vivamus nulla elit, vestibulum eget, semper et, scelerisque eget, lacus. Pellentesque viverra purus. Quisque elit. Donec ut dolor.
          

                </p>
            </div>
                <div class="jumbotron pull-right col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.5087827390107!2d74.316893214613!3d31.5101832547989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919047c0b5eb8f9%3A0xd056b0db18da3903!2sBahauddin+Zakariya+University+Lahore+-+Main+City+Campus!5e0!3m2!1sen!2snl!4v1452429814517" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
        
        
    </body>
</html>
