<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div --> 
    <div id="header">
        <h3>Welcome Class</h3>
    </div>
    <!-- end header div -->   
     
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
        <?php
         
		 if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['password']) && !empty($_POST['password'])){
			
			include('sql.php');
           
			
			$username = mysql_escape_string($_POST['name']);
			$password = mysql_escape_string(md5($_POST['password']));
						 
			$search = mysql_query("SELECT username, password, active FROM users WHERE username='".$username."' AND password='".$password."' AND active='1'") or 			die(	mysql_error()); 
			$match  = mysql_num_rows($search);
			
			if($match > 0){
				$msg = 'Login Complete! Thanks';
				// Set cookie / Start Session / Start Download etc...
			}else{
				$msg = 'Login Failed! Please make sure that you enter the correct details and that you have activated your account.';
			}
		}
                 
             
        ?>
        <!-- stop PHP Code -->
     
        <!-- title and description -->    
        <h3>Login Form</h3>
        <p>Please enter your name and password to login</p>
         
        <?php 
            if(isset($msg)){ // Check if $msg is not empty
                echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and add a div around it with the class statusmsg
            } ?>
         
        <!-- start sign up form -->   
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="" />
            <label for="password">Password:</label>
            <input type="password" name="password" value="" />
             
            <input type="submit" class="submit_button" value="Sign up" />
        </form>
        <!-- end sign up form --> 
         
    </div>
    <!-- end wrap div --> 
</body>
</html>