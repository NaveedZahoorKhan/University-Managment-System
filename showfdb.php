<script>
    function showUser(str) 
    {
       
  
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("loadmehere").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getallfac.php?q="+str,true);
        xmlhttp.send();
    
    }
    
    

</script>
<div class="panel-body">
 
       
    
    
</div>
<div id="advancepanel" class="jumbotron">
    
            <input type="text" class="input-active" placeholder="Enter Faculty ID" oninput="showUser(this.value)">
            <br>
</div>
<div id="loadmehere" class="jumbotron">
    <script>showUser("d");</script>
</div>