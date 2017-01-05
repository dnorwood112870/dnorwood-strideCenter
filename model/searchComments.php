<?php
$mysqli = new mysqli("localhost","root","elite1976","iRoot");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

include('/home/ubuntu/workspace/view/searchComments.php');
$email=$_GET["email"];
$sql = "SELECT DISTINCT email, comments FROM UserComments where email = '$email'";
$result = $mysqli->query($sql);
$getData = new data_out_cls;
$getData->data_out_fnc($result);
?>