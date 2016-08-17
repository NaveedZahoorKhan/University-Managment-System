<?php 
 $con=mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to database server(localhost) with username and password.
 mysql_select_db("registrations",$con) or die(mysql_error()); // Select registrations database

?>