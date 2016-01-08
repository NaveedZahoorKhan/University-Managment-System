<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href=".\bootstrap\css\bootstrap.css">
<script src=".\bootstrap\js\bootstrap.js"></script>
</head>
<body>

 <div class="panel panel-default">
 	<div class="panel panel-heading">
 		<h3>Select a Level : </h3>
 	</div>
 	<div class="panel panel-body">
 	<form>
 		<select name="" >
 		<?php 
$q = intval($_GET['q']);
if ($q = "computing") 
{

 ?>
 			<option value="bachelor">Bachelor</option>
 			<option value="master">Master</option>}
 			
 <?php 

}
?>			
 		</select>
</form>
 	</div>
 </div>
 

</body>
</html>