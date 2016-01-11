<!doctype html>
<html>
    
    <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="stylesheet/SuperCSS.css" rel="stylesheet">    
    <script src="script/carouseller.min.js"></script>
    
    <title>My Educational Site</title>
    
      
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
    // Add slideDown animation to dropdown
    $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to dropdown
    $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
    $(function() {
		carouseller = new carousel('.carouseller');
	});


    </script>
    <style>
        p
        {
            background-color: none;
        }
        @media screen and (max-width: 500)
        {
            #f1
            {
                width: 90%;
            }
            
        }
    </style>
   
<body class="animated fadeIn">
    
          <div class="navbar navbar-primary navbar-fixed-top">
          
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <i class="material-icons" >menu</i>
                </button>
                <a class="navbar-brand waves-effect" href="javascript:void(0)">Site Name Here</a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                  <li class="active waves-effect"><a href="#">Home</a></li>
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
                    
                  session_start();
                  if(isset($_COOKIE["uname"]) and $_COOKIE["name"]=="admin")
                  {
                      ?>
                    <li><a href="firstpage.php">Administration</a></li>
                    <?php
                  }
                    if (!isset($_COOKIE["uname"])) {
                        
                    ?>
                    
                    <li><a href="login.php">Login</a></li>
                     <?php       
                    }       
                    else if (isset($_COOKIE["uname"])) {
                       
                        ?>
                    
                    <li class="dropdown"><a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <?= $_COOKIE["uname"] ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                            <li><a href="logout.php" <span class="glyphicon glyphicon-log-out"></span> Logout </a> </li>
                        </ul>
                    
                    </li>
                    <?php
    
                    } 
                    ?>
                    
                 </ul>
              </div>
            
        </div>
    

        
        <!-- END OF NAVBAR -->
        
<!-- Slide Show -->

  
<div id="carousel-example-generic" class="carousel slide" style="margin-top: 60px">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="item active deepskyblue">
            <img src="image/image_new-11 - Copy.png" alt="unable to load" class="img img-responsive" width="1920px" height="1080px">
	<div class="carousel-caption">
            <h3  data-animation="animated bounceInLeft" class="pull-left">
              BZU LHR CEO - In top 100 CEO's of Asia
            </h3>
            
                
           
         <!--    <button class="btn btn-lnk pull-left" data-animation="animated zoomInUp">Read More</button>  -->
          </div>
        </div> <!-- /.item -->

        <!-- Second slide -->
        <div class="item skyblue">
            <img src="image/image_new-11 - Copy.png" alt="unable to load" class="img img-responsive" width="1920px" height="1080px">
            
          <div class="carousel-caption">
        
            <h3 data-animation="animated bounceInUp" class="pull-left">
              BZU Lahore - Campus 1 
            </h3>
            
          </div>
        </div><!-- /.item -->

        <!-- Third slide -->
        <div class="item darkerskyblue" >
            <img src="image/image_new-11 - Copy.png" alt="unable to load" class="img img-responsive" width="1920px" height="1080px">
          <div class="carousel-caption">
            <h3 class="icon-container" data-animation="animated zoomInLeft">
              <span class="glyphicon glyphicon-glass"></span>
            </h3>
            <h3 data-animation="animated flipInX">
              This is the caption for slide 3
            </h3>
            <button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn">Button</button>
          </div>
        </div><!-- /.item -->

      </div><!-- /.carousel-inner -->

      <!-- Controls -->
    </div><!-- /.carousel -->

</div><!-- /.container -->
<script src="script/demo.js"></script>
<hr>
	
<!-- Inspiration -->
<img src="image/inspiration-small.png" alt="unable to load" class="img img-thumbnail img-responsive center-block ">
<hr>
<div class="works_item alignleft clear">	
    <div class="carouseller row-fluid for-car"> 
    <div class="carousel-wrapper" > 
	<div class="carousel-items"> 
            <div class="span3 carousel-block">
                 <div style="margin-top: 60px; width: 60%;margin-left: 20%">
            <img class="img img-responsive img-thumbnail pull-left" src="image/male-default.png" width="50%">
            <h3>Faculty 1</h3>
            <p style="font-size: 10px">
                Lorem ipsum dolor sit amet, consectetue cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
<hr>
        </div>
                </div>
	<div class="span3 carousel-block">
            <img src="image/male-default.png" class="img img-thumbnail img-responsive" width="50%">
	<p style="font-size:13px;">
	 Mr - lfj
        </p>
        </div>
	<div class="span3 carousel-block">
          <img src="image/male-default.png" class="img img-thumbnail img-responsive" width="50%">
	<p style="font-size:13px;">
	 Mr - lfj
        </p>
	</div>
	<div class="span3 carousel-block"> <img src="image/male-default.png" class="img img-thumbnail img-responsive" width="50%">
	<p style="font-size:13px;">
	 Mr - lfj
        </p>
	</div>
	<div class="span3 carousel-block">
	<p style="font-size:13px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>	
	<div class="span3 carousel-block">
            <img src="image/male-default.png" class="img img-thumbnail img-responsive" width="50%">
	<p style="font-size:13px;">
	 Mr - lfj
        </p>
	</div>
	<div class="span3 carousel-block"> <img src="image/male-default.png" class="img img-thumbnail img-responsive" width="50%">
	<p style="font-size:13px;">
	 Mr - lfj
        </p></div>
        </div>
	</div>
	<div class="carousel-control-block">
	<div class="carousel-button-left shadow"><a href="javascript:void(0)">‹</a></div> 
	<div class="carousel-button-right shadow"><a href="javascript:void(0)">›</a></div> 
	</div>
	</div>
	</div>
<hr>

<div class="panel panel-default animated fadeInLeft" >
<div class="panel panel-header">
    
</div>
<div class="panel panel-body">
<div class="works_item alignleft clear">	
			
		<div class="carouseller row-fluid for-car"> 
			<div class="carousel-wrapper"> 
				<div class="carousel-items"> 
					<div class="span3 carousel-block">
					<h2>1 Item</h2>
					</div>
					<div class="span3 carousel-block">
						<h2>2 item</h2>
					</div>
					<div class="span3 carousel-block">
						<h2>3 item</h2>
					</div>
					<div class="span3 carousel-block">
						<h2>4 item</h2>
					</div>
					<div class="span3 carousel-block">
						<h2>5 item</h2>
					</div>
					<div class="span3 carousel-block">
						<h2>6 item</h2>
					</div>
					<div class="span3 carousel-block">
						<h2>7 item</h2>
					</div>
				</div>
			</div>
			<div class="carousel-control-block">
				<div class="carousel-button-left shadow"><a href="javascript:void(0)">‹</a></div> 
				<div class="carousel-button-right shadow"><a href="javascript:void(0)">›</a></div> 
			</div>
		</div>
	
</div>

	</div>
</div>

<hr>
<div class="panel panel-info" style="background-color: #000\9">
	<div class="container-fluid">
	<div class="panel-header">
		
	</div>

		<div class="col-sm-4 col-md-3">
			
		
		Campus #1
		<ul class="list-group">
		    <li class="list-group-item"><span class="glyphicon glyphicon-home"> University Address Here</span></li>
                    <br>
		    <li class="list-group-item"><span class="glyphicon glyphicon-earphone"> (0092) 042 - 123456784</span></li>
                    <br>
		    <li class="list-group-item"><span class="glyphicon glyphicon-envelope	"> info@mymailaddress.edu.pk</span></li>
		    
		</ul>
		</div>
		<div class="col-sm-3 col-md-4">
			Campus #2
			<ul class="list-group">
		    <li class="list-group-item"><span class="glyphicon glyphicon-home"> Second Branch Address 	</span></li>
                    <br>
		    <li class="list-group-item"><span class="glyphicon glyphicon-earphone"> (092) 042 - 23342524</span></li>
                    <br>
		    <li class="list-group-item"><span class="glyphicon glyphicon-envelope	"> info@bzulahore.edu.pk</span></li>
		    
		</ul>
		</div>
		<div class="col-sm-3">
		<div class="list-group">
			Careers
			<ul class="list-group">
				<li class="list-group-item"><span class="glyphicon glyphicon-certificate"><a href="hr@bzulahore.edu.pk"> 	Drop your cv</a></span> </li>
                                <br>
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