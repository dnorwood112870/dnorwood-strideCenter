<?php    
//$mysqli = new mysqli("b92fa14bf9b544:6e525910@us-cdbr-iron-east-03.cleardb.net","b92fa14bf9b544","bd57c2d04bf9556","heroku_7c8f80f63a5a60c");
//$mysqli = new mysqli("localhost","root","elite1976","iRoot");
$mysqli = new mysqli("localhost","b92fa14bf9b544","bd57c2d04bf9556","heroku_7c8f80f63a5a60c");

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