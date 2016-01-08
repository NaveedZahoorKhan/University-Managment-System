<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>welcome</title>
	<link rel="stylesheet" href="">
</head>
<body>
	Welcome <?php echo $_POST["name"]; ?>
	<br><br>
	Your last name: <?php echo $_POST["lname"]; ?>
	<br><br>
	Your Email-id: <?php echo $_POST["email"]; ?>
	<br><br>
	Your comment: <?php echo $_POST["comment"]; ?>
</body>
</html>