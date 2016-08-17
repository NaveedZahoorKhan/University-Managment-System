<!doctype html>
<html>
<head>
    <title>Login Page</title>
    <script src="bootstrap/js/jquery.min.js"></script>
    <link href="stylesheet/SuperCSS.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js"></script>
                
</head>


<body>   
    
        
          <div class="navbar navbar-primary navbar-fixed-top">
          
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <i class="material-icons" >menu</i>
                </button>
                <a class="navbar-brand waves-effect" href="javascript:void(0)">Site Name Here</a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li class="active waves-effect"><a href="index.php">Home</a></li>
                  <li><a  class="waves-effect" href="fac.php">Faculty</a></li>
                  <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Contact US
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="contact.php"><span class="ripple-container"></span>Contact Us</a></li>
                        <li><a href="aboutus.php" class="waves-effect">About Us</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                   
                 <?php
                    /**
                    * @author Naveed Zahoor
                    * @author Naveed Zahoor <naveealikhan@gmail.com>
                    * @version 1.0.1                    
                     */
                  session_start();
                  if(isset($_COOKIE["uname"]) and $_COOKIE["name"]=="admin")
                  {
                      ?>
                    <li><a href="firstpage.php">Administration</a></li>
                    <?php
                  }
                    
                     if (isset($_COOKIE["uname"])) {
                         header("Location : error.html");
                        ?>
                    
                    
                    <?php
    
                    } 
                    ?>
                    
                 </ul>
              </div>
            
        </div>
    <div class=" jumbotron">
    <div class="center-block text-center panel panel-danger center-block ">
        <div class="panel-header">
            <h3>Login Here</h3>
            
        </div>
        <div class="panel-body">
            <form class="form-inline" method="post" action="allAboutDb.php">
                 <input class="input-lg" type="text" required="required" name="username" placeholder="Your Name here">
                
        <br>
        <br>
        <input class="input-active input-lg" type="password" required="required" name="password">
        <br>
        <br>
        <input class="btn btn-sm" type="submit">
    </form>
        </div>
    </div>
    </div>
</body>
</html>