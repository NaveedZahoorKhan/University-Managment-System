
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script>
   function myfun()
   {
       var x = document.getElementById("byname").value;
       if(x.length > 0)
       {
           var r = document.getElementById("banid");
           r.setAttribute("disabled","");
            document.getElementById("banfrom").setAttribute("disabled","");
            document.getElementById("banto").setAttribute("disabled","");
       }
       else
       {
           document.getElementById("banid").removeAttribute("disabled","");
           document.getElementById("banfrom").removeAttribute("disabled","");
           document.getElementById("banto").removeAttribute("disabled","");
       }
   }
   function myfun3()
   {
       var x = document.getElementById("banid").value;
       if(x.length > 0)
       {
           var r = document.getElementById("byname");
           r.setAttribute("disabled","");
            document.getElementById("banfrom").setAttribute("disabled","");
            document.getElementById("banto").setAttribute("disabled","");
       }
       else
       {
           document.getElementById("byname").removeAttribute("disabled","");
           document.getElementById("banfrom").removeAttribute("disabled","");
           document.getElementById("banto").removeAttribute("disabled","");
       }
   }
   function myfun4()
   {
       var x = document.getElementById("banfrom").value;
       if(x.length > 0)
       {
           document.getElementById("banto").setAttribute("required","required");
           var r = document.getElementById("byname");
           r.setAttribute("disabled","");
            document.getElementById("banid").setAttribute("disabled","");
            
       }
       else
       {
           document.getElementById("banto").removeAttribute("required","required");
           document.getElementById("byname").removeAttribute("disabled","");
           document.getElementById("banid").removeAttribute("disabled","");
          
       }
   }
   function myfun5()
   {
       var x = document.getElementById("banto").value;
       if(x.length > 0)
       {
           document.getElementById("banfrom").setAttribute("required","required");
           var r = document.getElementById("byname");
           r.setAttribute("disabled","");
            document.getElementById("banid").setAttribute("disabled","");
            
       }
       else
       {
           document.getElementById("banfrom").removeAttribute("required","required");
           document.getElementById("byname").removeAttribute("disabled","");
           document.getElementById("banid").removeAttribute("disabled","");
          
       }
   }
</script>
<div class="panel panel-body">
<form class="form-inline" method="post" action="banfac.php">
    <div class="form-group">
        <input placeholder="Ban By Name" id="byname" class=" form-control input-active" value="" name="banbyname" type="text" oninput="myfun()">
    </div>
    <br>
    <div class="form-group form-group-lg">
        <input id="banid" placeholder="Ban By ID" class="form-control" name="banbyid" type="text" oninput="myfun3()">
    </div>
    <br>
    <div class="form-group">
    <label>Ban a range:</label>
    <br>
    <input class="form-control" id="banfrom" placeholder="from" name="banfrom" oninput="myfun4()">
    <input class="form-control" id="banto" placeholder="to" name="banto" oninput="myfun5()">
    </div>
    <br>
    <button class="btn btn-sm">Submit</button>
</form>
</div>