
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
         
        <!-- start php code -->
         <?php
			

 
    if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email'])){
        // Form Submited
		 include('sql.php');
		 $name = mysql_escape_string($_POST['name']); // Turn our post into a local variable
    	 $email = mysql_escape_string($_POST['email']); // Turn our post into a local variable

			if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
				// Return Error - Invalid Email
				$msg = 'The email you have entered is invalid, please try again.';
			}else{
				// Return Success - Valid Email
				$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
				$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
				$password = rand(1000,5000); // Generate random number between 1000 and 5000 and assign it to a local variable.
				
				mysql_query("INSERT INTO users (username, password, email, hash,active) VALUES(
				'". mysql_escape_string($name) ."', 
				'". mysql_escape_string(md5($password)) ."', 
				'". mysql_escape_string($email) ."', 
				'". mysql_escape_string($hash) ."',0) ") or die(mysql_error());
				
				//Email verification
				$to      = $email; // Send email to our user
				$subject = 'Signup | Verification'; // Give the email a subject 
				$message = '
				 
				Thanks for signing up!
				Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
				 
				------------------------
				Username: '.$name.'
				Password: '.$password.'
				------------------------
				 
				Please click this link to activate your account:
				http://www.class.move.pk/BZU/verify.php?email='.$email.'&hash='.$hash.'
				 
				'; // Our message above including the link
									 
				$headers = 'From:bzu.web@class.move.pk' . "\r\n"; // Set from headers
			echo	mail($to, $subject, $message, $headers); // Send our email

			}
		
		
    }
             
	?>
        <!-- stop php code -->
     
        <!-- title and description -->   
        <h3>Signup Form</h3>
        <p>Please enter your name and email addres to create your account</p>
        
        <?php 
		if(isset($msg)){  // Check if $msg is not empty
			echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		} 
		?>
         
        <!-- start sign up form -->  
        <form action="" method="post">
           <div class="myLeft">
            <div style="float:left">
            <label for="name">Name:</label></div>
            
            <div style="float:left; padding-left:82px">
            <input type="text" name="name" value="" /></div>
            </div>
            
            <br/><br/>
            <div class="myLeft">
                <div style="float:left">
                <label for="email">Email:</label></div>
                <div style="float:left; padding-left:85px">
                <input type="text" name="email" value="" />
                </div>
          </div>
           <br/><br/>
           
          
             
            <input type="submit" class="submit_button" value="Sign up" />
        </form>
        <!-- end sign up form -->
         
    </div>
    <!-- end wrap div -->
</body>
</html>