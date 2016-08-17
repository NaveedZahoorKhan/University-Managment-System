<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './allAboutDb.php';
$con = mysql_connect("localhost","onlinesa_root","Pak1stan");
mysql_select_db("users");
 $sql = "SELECT * FROM `users` WHERE uname = \"".$_COOKIE["uname"]."\" and passwd = \"".$_POST["oldpass"]."\"";
$res = mysql_query($sql);
$res2 = mysql_num_rows($res);
if ($res2 >0)
    {
    if(isset($_POST["changename"]))
    {
        $newname= $_POST["changename"];
        $oldname = $_COOKIE["uname"];
        $sql = "UPDATE `users` SET `name`=\"$newname\" WHERE `name` = \"$oldname\"";
        timewrite("Going to change name from :" . $oldname . "to : " . $newname);
        $res = mysql_query($sql);
        $res3 = mysql_affected_rows();
        timewrite("Mysql replied with : " . $res3);
    }
    if (isset($_POST["newpass"]))
    {
        $newpass = $_POST["newpass"];
        $name = $_COOKIE["uname"];
        $sql = "UPDATE `users` SET `passwd`=\"$newpass\" WHERE `name` = \"$name\"";
        $res7 = mysql_query($sql);
        $rows = mysql_affected_rows();
        timewrite("MySql Replied while changing Password" . $rows);
    }
}
else
{
    timewrite("Password Failed");
}