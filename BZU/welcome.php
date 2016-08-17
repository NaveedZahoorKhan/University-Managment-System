<?php
session_start();


 if(isset($_POST['loggedin_signin_email']) &&   isset($_POST['loggedin_password'])  ){
 
 	if($_POST['loggedin_signin_email'] == $_SESSION['email'] && $_POST['loggedin_password'] == $_SESSION['password'] )
	{
		
		include('sql.php');
		
			$roll=$_SESSION['roll'];
			
			$results = mysql_query("SELECT * from result where roll_no=\"$roll\"");
			
			# loop through each country
			$row = mysql_fetch_array($results);
				
		
			//echo $row['roll_no']." ".$row['name']." ".$row['sessional']." ".$row['mid']." ".$row['final'];
		
		?>
        <html>
        
        <head>
         		<link href="css/reset.css" type="text/css" rel="stylesheet"/>
                <link href="css/style.css" type="text/css" rel="stylesheet"/>
        
        </head>
        
        <body>
        		
       
                
                <div id="wrap">
                 <p>
                 <h3>Result Card</h3>
                 </p>
                    <label for="name"><strong>ID:   </strong></label> <label for="name"><?=  $row['roll_no']?></label><br/>
                     <label for="name"><strong>Name:   </strong></label> <label for="name"><?=  $row['name']?></label><br/>
                     <label for="name"><strong>Sessional:   </strong></label> <label for="name"><?=  $row['sessional']?></label><br/>
                     <label for="name"><strong>Mid:   </strong></label> <label for="name"><?=  $row['mid']?></label><br/>
                     <label for="name"><strong>Final:</strong></label> <label for="name"><?=  $row['final']?></label><br/>
                     
                
                </div>
        
        
        </body>
        
        
        </html>
        
        
        
        
        </div>
        
        
        
        <?php
			
			

		
		
		
	}
	
	else{
		header("Location:index.php");
		
		}
	
 }
 else{
	 	
		
		header("Location:index.php");
	 
	 }
 
?>