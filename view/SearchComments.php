<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>View.php</title>
</head>
<body>
<?php
class data_out_cls {
 	
  public function data_out_fnc($result) {
    echo "<table>"; 
    echo "<tr>";
    echo "<th>EMAIL_ADDRESS</th>";
    echo "<th>USER_COMMENTS</th>";
    echo "</tr>";

        if ($result->num_rows > 0) {
            while($row = $result->fetch_array(MYSQLI_NUM)) {
                
                echo "<tr>";
                echo "<td>$row[0]</th>";
                echo "<td>$row[1]</th>";
                echo "</tr><br/>";
                }
        } 
        else {
                echo "0 results";
             }  
    }
}
?>
</table>
</body>
</html>