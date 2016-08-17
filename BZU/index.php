<!doctype html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  
	<title>Log In &amp; Sign Up Form</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
			
		
 
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirm_password']) && !empty($_POST['confirm_password']) && isset($_POST['g-recaptcha-response'])){
        // Form Submited
		
		$captcha=$_POST['g-recaptcha-response'];
		 if(!$captcha){
           $msg='Please check the the captcha form.';
         
        }
        /*$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfHHRQTAAAAAAtxTk_nu_9thB22_csN8cZXhSnm & response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h2>You are spammer ! </h2>';
        }else
        {
          echo '<h2>Thanks for Registering</h2>';
        }*/
	else{	
		 include('sql.php');
		 $name = mysql_escape_string($_POST['name']); // Turn our post into a local variable
    	 $email = mysql_escape_string($_POST['email']); // Turn our post into a local variable
		  $password=mysql_escape_string($_POST['password']);
			
			if(!eregi("^BSIT13F[0-2][0-9][0-9]$", $name)){
				// Return Error - Invalid Roll
				$msg = 'The Roll you have entered is invalid, please try again.(BSIT13FXXX)';
			}
			elseif(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
				// Return Error - Invalid Email
				$msg = 'The email you have entered is invalid, please try again.';
			}else{
				$result = mysql_query("select * from users where email =  \"$email\" or roll_no= \"$name\" ",$con);
				  
				if(mysql_num_rows($result)>0)
				{
					$msg="Already registered , Try new one";
					//$msg="account already exsist, Try again with new information";
				}
				else{
				
				
				// Return Success - Valid Email
				$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
				$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
				//$password = rand(1000,5000); // Generate random number between 1000 and 5000 and assign it to a local variable.
				
				mysql_query("INSERT INTO users (roll_no, password, email, hash,active) VALUES(
				'". mysql_escape_string($name) ."', 
				'". mysql_escape_string(md5($password)) ."', 
				'". mysql_escape_string($email) ."', 
				'". mysql_escape_string($hash) ."',0) ",$con) or die(mysql_error());
				
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
				mail($to, $subject, $message, $headers); // Send our email
				
				}//else of single account

			}
		
		
    }
}//else of recaptcha
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
            <label for="name">Roll:</label></div>
            
            <div style="float:left; padding-left:92px">
            <input type="text" name="name"  id="user_name" value=""  placeholder="BSITF13XXX" required></div>
            </div>
            
            <br/><br/>
            <div class="myLeft">
                <div style="float:left">
                <label for="email">Email:</label></div>
                <div style="float:left; padding-left:82px">
                <input type="text" name="email" value="" placeholder="name@domain.com" required>
                </div>
          </div>
           <br/><br/>
           <div class="myLeft" >
           <div>
            <label for="password" style="float:left">Password:</label></div>
            <div style="float:left; padding-left:58px">
            
            <input type="password"  placeholder="Password" name="password" id="password" required>
            </div>
          </div><br/><br/>
          <div class="myLeft">
            <label for="password">ConfirmPassword:</label>
           <input type="password"  placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>
          </div>
          
         
            
            <div style="margin-top:20px; margin-left:15px ">
            <!-- Recaptha-->
            <div class="g-recaptcha" data-sitekey="6LfHHRQTAAAAAK8I7dumuWvWBxDWcN4iYL0puytm"></div>
            </div>
           <div class="myLeft" style="padding-top:15px; padding-left:130px"> 
          <input type="submit" class="submit_button" value="Sign up" /><br />
            </div>
          
        </form>
        <!-- end sign up form -->
        
          <div style="margin-top:50px">
             	
                
		
        <nav class="main-nav">
			<label for="name">Already a member:</label>
            <input type="button" class="cd-signin" value="Sign In"/>
		</nav>     
                
         </div>
        
    </div>
    <!-- end wrap div -->
 

		
	

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
			
			</ul>

			<div id="cd-login"> <!-- log in form
            
             -->
				<form class="cd-form" action="">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin_email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin_password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
                        
					</p>
                    <p class="fieldset">
						<div id="result_message" ></div>
					</p>

					<p class="fieldset">
						<input class="full-width" id="sign_in" type="button" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			
			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span  class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->

<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/redirect.js"></script>

</body>
</html>