<?php

$mysqli = new mysqli("localhost","root","elite1976","iRoot");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

require_once('view/guestBook.php');
$name = $_POST["name"];
$email = $_POST["email"];
$birthdate = $_POST["birthdate"];
$comments = $_POST["comment"];
 if (($email != "NULL") && ($comments !="NULL"))
 {
        $sql = "INSERT INTO UserComments (name,email,birthdate,comments) VALUES ('$name', '$email', '$birthdate','$comments')";
        $result = $mysqli->query($sql);
        $getData = new data_out_cls;
        $getData->data_out_fnc($result);
}

else {echo "PLEASE ENTER AN EMAIL ADDRESS AND COMMENT!!!";}

?>