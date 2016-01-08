<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
        <script src="bootstrap/js/jquery.min.js"></script>
        <link href="materialize/css/materialize.css" rel="stylesheet">
        
        <script src="materialize/js/materialize.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="stylesheet/css/bootstrap-material-design.min.css">
        <script src="script/js/material.js"></script>
        <script src="script/js/ripples.js"></script>
        <link href="stylesheet/icon.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
        <style type="text/css" media="screen">
            

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
                  <li><a href="pages/faculty.php">Faculty</a></li>
                  <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle active" data-toggle="dropdown">Contact US
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu active">
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="pages/aboutus.php">About Us</a></li>
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
    

        
        <!-- END OF NAVBAR -->
        
        
        <div class="container-fluid" style="margin-top: 80px">
<div class="jumbotron">

		
<form role="form" method="post" action="data.php">
		<div class="form-group">
                    <div class="row"> 
		<div class="input-field col s6">
          <input id="last_name" type="text" required="required" class="validate">
          <label for="last_name">First Name</label>
        </div>
                    </div>
			
		
		<div class="row">
		<div class="input-field col s6">
                    <label for="name" id="lname">Last Name:</label>
			
                            <input type="text" class="validate" name="lname" id="lanme" value="" required="required">
		</div>

</div>
		<div class="row">
			<div class="col s6 input-field">
                            <label id="mail" for="e-mail">E-Mail:</label>
			
                            <input type="email" id="mail" class="form-control" name="email" value="">
		</div>
                </div>
                <div class="row" style="padding-top:10px">
		<div class="col s6 input-field">
                    <label id="msg" for="message">Your message goes here...!</label>
		
                    <textarea class="form-control" rows="5" cols="7" id="msg" name="comment" required="required"></textarea>
		</div>
	
</div>
<div class="row" style="padding-left:50%;padding-top:1%;">
	<div class="col-mad-3">
            <button type="submit" class="btn btn-default" id="sub">Submit <span class="glyphicon glyphicon-ok"></span></button>
	</div>
	
</div>
</div>
</form>

</div> 
</div>



<hr>


<div class="panel-primary" style="border-top:black;">
	<div class="container-fluid">
	<div class="panel-header">
		
	</div>
	<div class="row">
	<div class="col-sm-2">
		
	
		Social
		<ul class="list-group">
		    <li class="list-group-item"><a href="">Facebook</a></li>
		    <li class="list-group-item"><a href="">Google</a></li>
		    <li class="list-group-item"><a href="">Twitter</a></li>
		    <li class="list-group-item"><a href="">Instagram</a></li>
		</ul>
		</div>
		
		<div class="col-sm-4">
			
		
		Campus #1
		<ul class="list-group">
		    <li class="list-group-item"><span class="glyphicon glyphicon-home"> Garden Town - Lahore Punjab Pakistan</span></li>
		    <li class="list-group-item"><span class="glyphicon glyphicon-earphone"> (092) 042 - 23342524</span></li>
		    <li class="list-group-item"><span class="glyphicon glyphicon-envelope	"> info@bzulahore.edu.pk</span></li>
		    
		</ul>
		</div>
		<div class="col-sm-3">
			Campus #2
			<ul class="list-group">
		    <li class="list-group-item"><span class="glyphicon glyphicon-home"> Kot Lakhpat - Lahore Punjab Pakistan	</span></li>
		    <li class="list-group-item"><span class="glyphicon glyphicon-earphone"> (092) 042 - 23342524</span></li>
		    <li class="list-group-item"><span class="glyphicon glyphicon-envelope	"> info@bzulahore.edu.pk</span></li>
		    
		</ul>
		</div>
		<div class="col-sm-3">
		<div class="list-group">
			Careers
			<ul class="list-group">
				<li class="list-group-item"><span class="glyphicon glyphicon-certificate"><a href="hr@bzulahore.edu.pk"> 	Drop your cv</a></span> </li>
				<li class="list-group-item"><span class="glyphicon glyphicon-king"><a href=""> Vacancies</a></span></li>


			</ul>
			</div>
		</div>
	</div>
	</div>
<div class="panel-footer">
	All rights reserved. Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Naveed Zahoor.
</div>
</div>
</body>
</html>