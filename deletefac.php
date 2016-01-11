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
    timewrite("Connecting from delthem.php file");
    timewrite("Connection Failed");
}
if (isset($_POST["delbyname"]))
{
    delbyname();
}
elseif (isset($_POST["delbyid"])) 
    {
    delbyid();
}
elseif (isset($_POST["delfrom"])) 
    {
delfrom();
}
function delbyname()
{
    $name = $_POST["delbyname"];
    $sql = "DELETE FROM `faculty` WHERE `name` = \"$name\"";
    timewrite("Executing Query : " . $sql);
    $res = mysql_query($sql);
    timewrite($res . "From delbyname");
     $res2 = mysql_affected_rows();
    
        timewrite("Query Executed");
        timewrite("Rows Effected " . $res2);
    

    mysql_error();
}
function delbyid()
{
    $id = $_POST["delbyid"];
    $sql = "DELETE FROM `faculty` WHERE \'sid\' = \'$id\'";
    $res = mysql_query($sql);
    timewrite($res . "From delbyid");
    
}
function delfrom()
{
    
    $from = $_POST["delfrom"];
    $to = $_POST["delto"];
   $sql = "DELETE FROM `faculty` WHERE `sid` BETWEEN \'$from\' AND \'$to\'";
    timewrite("Executing Command from delfrom()");
    timewrite($sql);
    $res =mysql_query($sql);
    $res2 = mysql_affected_rows();
    timewrite("Rows Affected : " . $res2);
}
mysql_close($conn);