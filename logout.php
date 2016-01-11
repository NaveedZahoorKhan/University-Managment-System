

<?php 
include_once './allAboutDb.php';
foreach($_COOKIE as $key => $value)
{

    setcookie($key , $value, time()-10000);
}
                   
echo "Youre logged out";
timewrite("Destroyed all cookies");

myredirect();


