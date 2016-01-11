<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './allAboutDb.php';
$conn = mysql_connect("localhost","root","toor");
if (!$conn) {
    die('Could not connect to MySQL: ' .  mysql_error());
    timewrite("Connecting from banthem.php file");
    timewrite("Connection Failed");
}
if (isset($_POST["banbyname"]))
{
    banbyname();
}
elseif (isset($_POST["banbyid"])) 
    {
    banbyid();
}
elseif (isset($_POST["banfrom"])) 
    {
banfrom();
}
function banbyname()
{
    $name = $_POST["banbyname"];
    $sql = "UPDATE `faculty` SET `active` = 0 WHERE `name` = \"$name\"";
    timewrite("Executing Query : " . $sql);
    $res = mysql_query($sql);
    timewrite($res . "From banbyname");
     $res2 = mysql_affected_rows();
    
        timewrite("Query Executed");
        timewrite("Rows Effected " . $res2);
    

    mysql_error();
}
function banbyid()
{
    $id = $_POST["banbyid"];
    $sql = "UPDATE `faculty` SET `active` = 1 WHERE \'id\' = \'$id\'";
    $res = mysql_query($sql);
    timewrite($res . "From banbyid");
    
}
function banfrom()
{
    
    $from = $_POST["banfrom"];
    $to = $_POST["banto"];
   $sql = "UPDATE `faculty` SET `active` = 1 WHERE `id` BETWEEN \'$from\' AND \'$to\'";
    timewrite("Executing Command from banfrom()");
    timewrite($sql);
    $res =mysql_query($sql);
    $res2 = mysql_affected_rows();
    timewrite("Rows Affected : " . $res2);
}
mysql_close($conn);