<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                  <li><a href="fac.php">Faculty</a></li>
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
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                            <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a> </li>
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
        if(isset($_COOKIE["uname"]))
        {
            $conn = mysql_connect("localhost","onlinesa_root","Pak1stan");
            mysql_select_db("onlinesa_loginbaby");
            $name = $_COOKIE["uname"];
            $sql = "SELECT * FROM student WHERE name = \"$name\"";
           
            $res = mysql_query($sql);
            mysql_error();
            $row = mysql_fetch_array($res);
            
        ?>
        <div class="container">
            <br>
            <br><br>
            <br>
        
        <div class="row">
            <div class="col-md-7 col-sm-3"><h1 style="font-family:Segoe Script"><?php echo (strtoupper($row["name"]) ."\t". strtoupper($row["lname"])); ?></h1></div>
            
        <img class="img-circle pull-right img-responsive col-sm-3 col-md-2"  src="<?= $row["profilepic"]; ?>" alt="unable to load">
        </div>
       
        <hr style="background-color: royalblue ;color:royalblue">
        <div class="row">
            <div class="col-md-3 pull-left"><h3 class="text-center">ID: <?= $row["sid"] ?></h3></div>
            
        </div>
        <div class="row pull-left">
            
            <h3><div class="label-floating">Address : </div>
                 <div class="label-inverse text-muted">Address Line 1: <?= $row["al1"]; ?>
                
                </div>
                
                <br>
                <div class="label-placeholder">Address Line 2: <?= $row["al2"]; ?></div>
            </h3>
        </div>
                
        <div class="row " style="margin-left: 50%">
            <h3>
                <div class="text-warning">
                    Course : <?= strtoupper($row["course"]); ?>   
                </div>
            </h3>
        </div>
        <br>
        
        <div class="row pull-left">
            <h3>
                <div class="text-warning">Total Dues: <?= $row["totaldues"]; ?></div>
            </h3>
        </div>
        <div class="row" style="margin-left: 50%">
            <h3>
                <div class="text-uppercase">Session : <?php $year = split("-", $row["session"]);
                echo $year[0];
                ?></div>
            </h3>
        </div>
            </div>
            
        
        
        
        
        <?php
        
        }
        else     
        {
            header("Location:error.html");
        }
            
        
        
 ?>
        
        
    </body>
</html>
