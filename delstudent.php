
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
           var r = document.getElementById("delid");
           r.setAttribute("disabled","");
            document.getElementById("delfrom").setAttribute("disabled","");
            document.getElementById("delto").setAttribute("disabled","");
       }
       else
       {
           document.getElementById("delid").removeAttribute("disabled","");
           document.getElementById("delfrom").removeAttribute("disabled","");
           document.getElementById("delto").removeAttribute("disabled","");
       }
   }
   function myfun3()
   {
       var x = document.getElementById("delid").value;
       if(x.length > 0)
       {
           var r = document.getElementById("byname");
           r.setAttribute("disabled","");
            document.getElementById("delfrom").setAttribute("disabled","");
            document.getElementById("delto").setAttribute("disabled","");
       }
       else
       {
           document.getElementById("byname").removeAttribute("disabled","");
           document.getElementById("delfrom").removeAttribute("disabled","");
           document.getElementById("delto").removeAttribute("disabled","");
       }
   }
   function myfun4()
   {
       var x = document.getElementById("delfrom").value;
       if(x.length > 0)
       {
           document.getElementById("delto").setAttribute("required","required");
           var r = document.getElementById("byname");
           r.setAttribute("disabled","");
            document.getElementById("delid").setAttribute("disabled","");
            
       }
       else
       {
           document.getElementById("delto").removeAttribute("required","required");
           document.getElementById("byname").removeAttribute("disabled","");
           document.getElementById("delid").removeAttribute("disabled","");
          
       }
   }
   function myfun5()
   {
       var x = document.getElementById("delto").value;
       if(x.length > 0)
       {
           document.getElementById("delfrom").setAttribute("required","required");
           var r = document.getElementById("byname");
           r.setAttribute("disabled","");
            document.getElementById("delid").setAttribute("disabled","");
            
       }
       else
       {
           document.getElementById("delfrom").removeAttribute("required","required");
           document.getElementById("byname").removeAttribute("disabled","");
           document.getElementById("delid").removeAttribute("disabled","");
          
       }
   }
</script>
<div class="panel panel-body">
    <form class="form-inline" method="post" action="deletethem.php">
    <div class="form-group">
        <input placeholder="Delete By Name" id="byname" class=" form-control input-active" value="" name="delbyname" type="text" oninput="myfun()">
    </div>
    <br>
    <div class="form-group form-group-lg">
        <input id="delid" placeholder="Delete By ID" class="form-control" name="delbyid" type="text" oninput="myfun3()">
    </div>
    <br>
    <div class="form-group">
    <label>Delete a range:</label>
    <br>
    <input class="form-control" id="delfrom" placeholder="from" name="delfrom" oninput="myfun4()">
    <input class="form-control" id="delto" placeholder="to" name="delto" oninput="myfun5()">
    </div>
    <br>
    <button class="btn btn-sm">Submit</button>
</form>
</div>