<!doctype html>
<html>
<head>
    <title>Login Page</title>
    <script src="bootstrap/js/jquery.min.js"></script>
    <link href="stylesheet/SuperCSS.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js"></script>
                
</head>


<body>    
    <div class="panel panel-danger">
        <div class="panel-header">
            <h3>Login Here</h3>
            
        </div>
        <div class="panel-body">
            <form class="form-inline" method="post" action="allAboutDb.php">
        <input class="input-active" type="text" required="required" name="username">
        <input class="input-active" type="password" required="required" name="password">
        <input class="btn btn-sm" type="submit">
    </form>
        </div>
    </div>
    
</body>
</html>