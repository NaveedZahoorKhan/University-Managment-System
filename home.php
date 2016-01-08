<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        $con = mysql_connect("localhost","root","toor"); 
        mysql_select_db("loginbaby");
        $q1 =  "SELECT * FROM `student` WHERE doe >= CURRENT_DATE - INTERVAL 1 DAY ";
        $q2 =  "SELECT * FROM `student` WHERE doe > CURRENT_DATE - INTERVAL 1 MONTH ";
        $q3 = "SELECT * FROM `student`";
        $w1 =  "SELECT * FROM `faculty` WHERE doe >= CURRENT_DATE - INTERVAL 1 DAY ";
        $w2 =  "SELECT * FROM `faculty` WHERE doe > CURRENT_DATE - INTERVAL 1 MONTH ";
        $w3 = "SELECT * FROM `faculty`";
        $res2 = mysql_query($q2);
        $res = mysql_query($q1);
        $res3 = mysql_query($q3);
        $e1 = mysql_query($w1);
        $e2 = mysql_query($w2);
        $e3 = mysql_query($w3);
        $f1 = mysql_num_rows($e1);
        $f2 = mysql_num_rows($e2);
        $f3 = mysql_num_rows($e3);
        $num = mysql_num_rows($res);
        $num2 = mysql_num_rows($res2);
        $num3 = mysql_num_rows($res3);
        ?>
       <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3>University Stats:</h3>
                </div>
                <div class="panel-body">
                    <div class="panel panel-info col-md-4   ">                    
                        <div class="panel-heading">
                            <h2>Student Info</h2>
                            
                        </div>
                        <div class="panel-body">
                            <br>
                            <h4>Entries today: <?php echo $num; ?></h4>
                           
                            <h4>Entries This Month: <?php echo $num2; ?></h4>
                            <h4>Total Enteries in Database: <?php echo $num3; ?></h4>
                        </div>
                </div>
                    <div class="panel panel-info col-md-4" >
                        <div class="panel-heading">
                            <h2> Faculty Info:</h2>
                        </div>
                   
                    <div class="panel-body">
                        <h4>Enteries Today: <?php echo $f1;?></h4>
                         <h4>Entries This Month: <?php echo $f2; ?></h4>
                            <h4>Total Enteries in Database: <?php echo $f3; ?></h4>
                    </div>
                         </div>
                </div>
       </div>
    </body>
</html>
