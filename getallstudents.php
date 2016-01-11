<style>
    table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$con = mysql_connect('localhost','root','toor');
mysql_select_db("loginbaby");
$mystr = $_GET["q"];
if($mystr=="d" or $mystr=="")
{
$sql="SELECT * FROM student";
$result = mysql_query($sql);

echo "<table>
<tr>
<th>ID </th>

<th>Firstname</th>

<th>Lastname</th>

<th>DOB</th>

<th>Address</th>

<th>Course</th>

<th>Email </th>

<th>Session </th>

</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo '<td>' . $row['sid'] ."</td>";
    echo "\t";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['al1'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
    echo '<td>' . $row['email'] . "</td>";
    echo '<td>' . $row['session'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
 else if(strpos($mystr, "-") > 0)
{
     
$sql="SELECT * FROM student where sid =\"$mystr\" ";
$result = mysql_query($sql);

echo "<table>
<tr>
<th>ID </th>

<th>Firstname</th>

<th>Lastname</th>

<th>DOB</th>

<th>Address</th>

<th>Course</th>

<th>Email </th>

<th>Session </th>

</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo '<td>' . $row['sid'] ."</td>";
    echo "\t";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['al1'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
    echo '<td>' . $row['email'] . "</td>";
    echo '<td>' . $row['session'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
mysql_close();

?>