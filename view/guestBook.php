<html>
<head>
<meta charset="UTF-8">
<title>Guest Book</title>
</head>
<body>
<?php
class data_out_cls {
 	
  public function data_out_fnc($result) {
    if ($result == TRUE) {
        
        $url ="/index.php";
        $url2="/controller/searchComments.php";
        echo "NEW COMMENT ADDED!!!<br/><br/>";
        echo "<a href=$url2>SEARCH FOR COMMENTS</a>";
        
    }
    
    else {echo "PLEASE TRY AGAIN!!!";}
  }
}
?>
</body>
</html>