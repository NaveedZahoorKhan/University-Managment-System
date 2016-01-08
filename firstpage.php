<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>University Managment System</title>
        <script src="bootstrap/js/jquery.min.js"></script>
        <link href="stylesheet/SuperCSS.css" rel="stylesheet">
        
             <script src="bootstrap/js/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="stylesheet/css/bootstrap-material-design.min.css">
        <script src="script/js/material.js"></script>
        <script src="script/js/ripples.js"></script>
        
        <script src="materialize/js/materialize.js"></script>
        <style></style>
        <script>
            $(document).ready(function (){
                $("#loadhere").load("home.php"); 
               document.getElementById("new").addEventListener("click",function ()
               {
                  $("#loadhere").load("AddStudent.php");
               });
               document.getElementById("home").addEventListener("click",function ()
               {
                  $("#loadhere").load("home.php"); 
               });
            });
            
        </script>
        
        
        </head>
    <body>
       
        
        <img class="img-responsive img-thumbnail bg-primary center-block"  src="image/logo.png" alt="" />
        <br>
        <div class="panel panel-default col-md-2 col-sm-3 left">
            <div class="panel-heading">
                Navigation
            </div>
            <div class="panel-body">
                <button class="btn btn-sm" id="home">Home</button>
                <br>
                <button class="btn btn-sm " id="new">New</button>
                <br>
                <button class="btn btn-sm" data-toggle="collapse" data-target="#collpase">Student</button>
                
                <ul id="demo" class="collapse">
                        <li><button>Remove Student</button></li>
                    </ul>
             
            </div>
            
        </div>
        <div class="col-md-9 jumbotron-success"id="loadhere">
            
            
        </div>
        <hr>
    </body>
</html>
