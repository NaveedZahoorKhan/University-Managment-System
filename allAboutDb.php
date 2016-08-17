<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of allAboutDb
 *
 * @author WaH33D Khan
 */
include_once './myloginhere.php';
include_once './upload.php';
    function filehandle()
    {
        $myfile = fopen("log.txt", "a") or die("unable to open file ");
        return $myfile;
    }
    function timewrite($msg)
    {
        $f  = filehandle();
        date_default_timezone_set("Asia/Karachi");
        
        
        $sec = idate("s");
        $min = idate("i");
        $hour = idate("h");
        fwrite($f, $hour . "-\t" . $min . "-\t" . $sec. "-\t" . $msg . PHP_EOL);
    }
    $db_server = mysql_connect($db_hostname,$db_username,$db_password);
    if (!$db_server)
        {
        timewrite("Unable to connect to database");
        }
    else
        {
            
            timewrite("Connected to data base");
            
        }
        mysql_select_db("onlinesa_loginbaby") or die("Unable to connect to datebase: " . mysql_error());
        timewrite("Selected Database") ;
        db_auth("admin", "toor");
        function db_auth($uname , $pass)
        {
            $q = "select * from users where uname = \"$uname\" and passwd = \"$pass\"";
            timewrite($q . " Going to execute");
            $res = mysql_query($q);
            if (!$res) die("database failed: ". mysql_error() . timewrite(mysql_error()));
                elseif ($res) 
                    {
                    timewrite("Successfully executed query");
                    timewrite("Received rows: "  . mysql_num_rows($res));
                    $row = mysql_fetch_assoc($res);
                    timewrite("$row[uid] \t $row[uname] \t $row[name] \t $row[passwd]");
                    timewrite("Going to start session");
                    startsession($row);
                    
            }
            
        }
        function myredirect()
        {
            header("Location: index.php");
        }
        function startsession($row)
        {
            if (!isset($_COOKIE['uid']) and !isset($_COOKIE['uname']))
            {
                setcookie("uid",$row['uid']);
                setcookie("uname",$row['name']);
                setcookie("name",$row["uname"]);
                timewrite("Cookies created");
                myredirect();
                
            }
            if (isset($_COOKIE['uid']) and isset($_COOKIE['uname']))
            {
                timewrite("Session Already found");
                myredirect();
                
            }
        }
       
        
