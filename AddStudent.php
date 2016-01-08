<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ADD STUDENT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        
    </head>
    <body >
        
        <div class="panel panel-default">
            <div class="panel-heading">
                New Entry form
            </div>
            <div class="panel-body">
                <div class="center-block col-sm-6" style="margin-left: 30px">
                <form class="form-horizontal" action="getVals.php" method="post" contextmenu="Form for entering new Data">
                    
                    <div class="form-group ">
                       
                        <input type="text" autofocus="true" class="text-justify form-control input-field" name="fname" placeholder="First Name" required="required">
                    </div>
                    <div class="form-group ">
                        
                        <input type="text" class="text-justify form-control" placeholder="Last Name" name="lname" required="required">
                    </div>
                    <div class="form-group">
                        
                        <input type="email" class="text-justify form-control" placeholder="Email" name="email" required="required">
                    </div>

                    <div class="form-group">
                        <input type="date" class="text-justify form-control" name="dater" required="required" required="required" placeholder="Date of Birth">
                    </div>
                    <div class="form-group">
                    <input type="text" class="text-justify form-control" name="addressl1" placeholder="Address Line 1" required="required">

                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control form-control" name="addressl2" placeholder="Address Line 2" >
                    </div>
                    <label class="control-label col-sm-3" for="choice">Choose a type:</label>
                    <br>

                    <div class="form-group form-inline">


                            <label class="control-label form-control" style="padding-left: 10%">Teacher: <input type="radio" required="required" class="radio-inline" onclick="myfun2()" name="typer" value="teacher"></label>
                        <label class="control-label form-control " style="padding-left: 10%">Student: <input type="radio" class="radio-inline" required="required" onclick="myfun()" name="typer" value="student"></label>
                    </div> 
                    <div class="everythinghere">

                    </div>
                    <br>

                    <div class="form-group">
                        <input type="submit" class="btn btn-lg center-block">

                    </div>        

                </form>
                </div>
            </div>
        </div>
        <script>
            
            function myfun()
            {

                $(".everythinghere").load("stud.php");
            }
            function myfun2()
            {
                $(".everythinghere").load("teach.php");
            }
        
        </script>
    </body>
</html>
