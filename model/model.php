<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Model.php</title>
</head> 
<body>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$email=$_POST['email'];
$sql= "SELECT name, comment FROM UserComments where email = $email";
$result=mysqli_query($con,$sql);
$myData = mysqli_fetch_all($result,MYSQLI_NUM);
require('view/view.php');
$myView = new dataOutputClass();
$myView->dataOutputFnc($myData);
mysqli_free_result($result);
mysqli_close($con);
?>
</body>
</html>