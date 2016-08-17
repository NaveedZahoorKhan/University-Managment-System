<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    function createStudent()
    {
        
        $id  =  $_POST["id"];
        $name = $_POST["fname"];
        $lname =$_POST["lname"];
        $email =$_POST["email"];
        $date = $_POST["dater"];
        $al1 =  $_POST["addressl1"];
        $al2 =  $_POST["addressl2"];
        $course = $_POST["field"];
        $dues  = $_POST["dues"];
        $password = $_POST["password"];
        
        $file = "image/students" . uploadfile();
        echo '<br>';
        
        //timewrite("Values Received at Create Student: ");
        //timewrite(" ");
        //timewrite(" ");
       // timewrite("$id \t $name \t $lname \t $email \t $date \t $al1 \t $al2 \t $course \t $dues");
        
        $q = "INSERT INTO onlinesa_loginbaby.student (sid, course,totaldues,al1,al2,name,lname,email,dob,profilepic,passwd) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        
         $con = new mysqli("localhost","onlinesa_root","Pak1stan", "onlinesa_loginbaby");
        $query = $con -> prepare($q);
        var_dump($query);
        $res = $query -> bind_param("ssissssssss",$id,$course,$dues,$al1,$al2,$name,$lname,$email,$date,$file,$password);
        //timewrite("Executing Query");
        //timewrite($q);
        $res2 = $query->execute();
        if ($res2 == TRUE)
            {
            echo mysqli_error($con);
            header("Location: firstpage.php");
            //timewrite("Successfully inserted values");
        }
        elseif ($res2 == FALSE) {
            echo mysqli_error($con);
          //  timewrite("Failed to insert Values :(");
            }
    }
    function uploadfile()
    {
        
$target_dir = "image/students/";
$target_file = $target_dir . basename($_FILES["filer"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["filer"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["filer"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["filer"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["filer"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$directory =  $_FILES["filer"]["name"];
return $directory;

    }
            function createTeacher()
    {
                $file = "image/students" . uploadfile();
        $fid  =  $_POST["id"];
        $name = $_POST["fname"];
        $lname =$_POST["lname"];
        $email =$_POST["email"];
        $date = $_POST["dater"];
        $al1 =  $_POST["addressl1"];
        $al2 =  $_POST["addressl2"];
        $subject = $_POST["subject"];
        $doj = $_POST["doj"];
        $facT = $_POST["facT"];
        
        $salary  = $_POST["salary"];
        $con = new mysqli("localhost","onlinesa_root","Pak1stan", "onlinesa_loginbaby");
        $q = "INSERT INTO onlinesa_loginbaby.faculty (id, subject,salary,al1,al2,name,lname,email,dob,doj,type,profilepic) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $query = $con -> prepare($q);
        var_dump($query);
        $res = $query -> bind_param("ssisssssssss",$id,$subject,$salary,$al1,$al2,$name,$lname,$email,$date,$doj,$facT,$file);
        $res2 = $query->execute();
        var_dump($res);
        echo '<br>';
        echo $id . $name. $al1;
        echo '<br>';
        
        var_dump($res2);
        echo '<br>';
        var_dump( $query->error);
        echo '<br>';
        echo $query->affected_rows;
        echo 'Successfully Inserted Values';  
    }
    
    if ($_POST["typer"]=="student")
    {
    createStudent();
    }
    elseif ($_POST["typer"]=="teacher")
    {
    createTeacher();
    }
    