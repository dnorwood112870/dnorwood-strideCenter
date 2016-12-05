<?php
$con=mysqli_connect("localhost","root","elite1976");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql= "CREATE DATABASE iRoot";
$result=mysqli_query($con,$sql);
$sql= "USE iRoot";
$result=mysqli_query($con,$sql);
$sql="CREATE TABLE UserComments (
         
         name varchar(50),
         email varchar(50) not null,
         birthdate varchar(20) ,
         comments varchar(1000) not null
    
    )";
$result=mysqli_query($con,$sql);

mysqli_close($con);
?>
