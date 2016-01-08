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
             <script src="bootstrap/js/bootstrap.js"></script>
             
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
               document.getElementById("banstud").addEventListener("click",function ()
               {
                   $("#loadhere").load("banstudent.php");
               })
            });
            
        </script>
        
        
        </head>
    <body>
       
        
        <img class="img-responsive img-thumbnail bg-primary center-block"  src="image/logo.png" alt="" />
        
        <div class="panel panel-success  col-md-2 col-sm-2 col-xs-1 pull-left ">
            <div class="panel-heading">
                Navigation
            </div>
            <div class="panel-body">
                <button class="btn btn-sm" id="home">Home</button>
                <br>
                <button class="btn btn-sm " id="new">New</button>
                <br>
                <button class="btn btn-sm" data-toggle="collapse" data-target="#collapsed">Student</button>
                <div id="collapsed" class="collapse">
                    
                        <button class="btn btn-sm">Remove Student</button>
                        <button class="btn btn-sm" id="banstud">Ban Student</button>
                    
                </div>
                <br>
                <button class="btn btn-sm" data-toggle="collapse" data-target="#collapser">Faculty</button>
                <div id="collapser" class="collapse">
                    
                        <button class="btn btn-sm">Remove Student</button>
                        <button class="btn btn-sm">Ban Student</button>
                    
                </div>
            </div>
            
        </div>
        <div class="col-md-9 col-sm-9 pull-right container-fluid"id="loadhere">
            
            
        </div>
        <hr>
    </body>
</html>
