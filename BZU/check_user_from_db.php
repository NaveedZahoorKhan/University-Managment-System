<?php 
session_start();
include('sql.php');

$signin_email = mysql_real_escape_string($_POST['signin_email']);  
$password=md5(mysql_real_escape_string($_POST['password']));  
error_reporting(E_ERROR | E_PARSE);
  
  
//mysql query to select field username if it's equal to the username that we check '  
$result = mysql_query("select * from users where email =  \"$signin_email\" and password= \"$password\" and active=1",$con);  
 
//if number of rows fields is bigger them 0 that means it's  available '  
if(mysql_num_rows($result)>0){  
    
	$row = mysql_fetch_array($result);
    $_SESSION['email']=$signin_email;
	$_SESSION['password']=mysql_real_escape_string($_POST['password']);
	$_SESSION['roll']=$row['roll_no'];
	
    echo 1;
	
	}
	
      
	
else{  
    //else if it's not bigger then 0, then it's  NOT available '  
    //and we send 1 to the ajax request 
	
	
	
	echo 0;
	
}  




?>