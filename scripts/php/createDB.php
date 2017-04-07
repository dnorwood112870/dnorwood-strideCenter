<?php
#$mysqli = new mysqli("us-cdbr-iron-east-03.cleardb.net","b92fa14bf9b544","bd57c2d04bf9556","heroku_7c8f80f63a5a60c");
$con= new mysqli("localhost","root","elite1976");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$createDB = "CREATE DATABASE heroku_7c8f80f63a5a60c";
$result1=mysqli_query($con,$createDB);
$sql1= "USE heroku_7c8f80f63a5a60c";
$result2=mysqli_query($con,$sql1);
$sql2="CREATE TABLE UserComments (
         
         name varchar(50),
         email varchar(50) not null,
         birthdate varchar(20) ,
         comments varchar(1000) not null
    
    )";
$result3=mysqli_query($con,$sql2);

mysqli_close($con);
?>
