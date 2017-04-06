<?php    


$mysqli = new mysqli("localhost","root","elite1976","iRoot");

         if ($mysqli->connect_errno) {
             printf("Connection to mySQL failed: %s\n", $mysqli->connect_error);
             exit();
         }

require('/home/ubuntu/workspace/view/guestBook.php');
$name = $_GET["name"];
$email = $_GET["email"];
$birthdate = $_GET["birthdate"];
$comments = $_GET["comment"];
$sql = "INSERT INTO UserComments (name,email,birthdate,comments) VALUES ('$name', '$email', '$birthdate','$comments')";
$result  = $mysqli->query($sql);
$getData = new data_out_cls;
$getData->data_out_fnc($result);



?>