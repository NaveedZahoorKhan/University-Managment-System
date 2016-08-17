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
        <?php
        $alpha = "abcdefghijklmnopqrstuvwxyz";
$alpha_upper = strtoupper($alpha);
$numeric = "0123456789";
$special = ".-+=_,!@$#*%<>[]{}";
$chars = "";
  $chars .= $alpha;
     
     $chars .= $alpha_upper;
     
      $chars .= $numeric;
     
       $chars .= $special;
     
   
    // default [a-zA-Z0-9]{9}
    $chars = $alpha . $alpha_upper . $numeric;
    $length = 9;

 
$len = strlen($chars);
$pw = '';
 
for ($i=0;$i<$length;$i++)
        $pw .= substr($chars, rand(0, $len-1), 1);
 
// the finished password
$pw = str_shuffle($pw);
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                New Entry form
            </div>
            <div class="panel-body">
                <div class="center-block col-sm-6" style="margin-left: 30px">
                    <form class="form-horizontal" action="getVals.php" method="post" enctype="multipart/form-data" contextmenu="Form for entering new Data">
                    
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
                    <input type="text" class="form-control" name="addressl2" placeholder="Address Line 2" >
                    </div>
                        <div class="form-group">
                            <input type="text" class="text-justify form-control" name="password"  value="<?= $pw ?>" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Browse<input type="file" name="filer" class=""></label>
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
