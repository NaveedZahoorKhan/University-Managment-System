<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        
        include "../allAboutDB.php";
        session_start();
       
        if($_SESSION["name"] != NULL)
        {
           
        class prof extends allAboutDb
        {          
            
            public function userdata()
            {
                
                $myobj = new allAboutDb();
                $GLOBALS["profilepic"] = $myobj -> getData("profilepic","data");
                $GLOBALS["addressl1"] = $myobj ->getData("addressl1", "data");
                $GLOBALS["addressl2"] = $myobj ->getData("addressl2","data");
               
                $GLOBALS["myname"] = $myobj ->getData("name", "users");
                
                
        }
        
        }
        
        prof::userdata();
        ?>
        <div class="container">
        <img src="../image/logo.png" class="img-responsive bg-primary" alt="unable to load">
        <div class="row">
            <div class="col-md-7"><h1><?= strtoupper($GLOBALS["myname"]); ?></h1></div>
            <div class="col-md-5">
        <img class="img-circle pull-right"  src="../<?= $GLOBALS["profilepic"]; ?>" alt="unable to load">
        <div class="row">
            
        </div>
            </div>
        </div>
        <?
        </div>
        
        
        
        <?php
        
        }
        else     
        {
            header("Location:error.html");
        }
            
        
        
 ?>
        
        
    </body>
</html>
