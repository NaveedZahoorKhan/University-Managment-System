<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Student.php';
include_once './allAboutDb.php';
include_once './myloginhere.php';;
class story extends Student
{
    public function createStudent()
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
        timewrite("Values Received at Create Student: ");
        timewrite(" ");
        timewrite(" ");
        timewrite("$id \t $name \t $lname \t $email \t $date \t $al1 \t $al2 \t $course \t $dues");
        $q = "INSERT INTO loginbaby.student (id, course,totaldues,al1,al2,name,lname,email,dob) VALUES (?,?,?,?,?,?,?,?,?)";
        
         $con = new mysqli("localhost","root","toor", "loginbaby");
        $query = $con -> prepare($q);
        var_dump($query);
        $res = $query -> bind_param("isissssss",$id,$course,$dues,$al1,$al2,$name,$lname,$email,$date);
        timewrite("Executing Query");
        timewrite($q);
        $res2 = $query->execute();
        if ($res2 == TRUE)
            {
            timewrite("Successfully inserted values");
        }
        elseif ($res2 == FALSE) {
            timewrite("Failed to insert Values :(");
            }
        echo '<br>';
        echo $id . $name. $al1;
        echo '<br>';
        var_dump($res2);
        echo 'Successfully Inserted Values';
    }
    function createTeacher()
    {
        var_dump($_POST);
        $id  =  $_POST["id"];
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
        $con = new mysqli("localhost","root","toor", "loginbaby");
        $q = "INSERT INTO loginbaby.faculty (id, subject,salary,al1,al2,name,lname,email,dob,doj,type) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $query = $con -> prepare($q);
        var_dump($query);
        $res = $query -> bind_param("isissssssss",$id,$subject,$salary,$al1,$al2,$name,$lname,$email,$date,$doj,$facT);
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
    }
    if ($_POST["typer"]=="student")
    {
    story::createStudent();
    }
    elseif ($_POST["typer"]=="teacher")
    {
    story::createTeacher();
    }