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
        
        echo "NEW COMMENT ADDED!!!";
    }
    
    else {echo "PLEASE TRY AGAIN!!!";}
  }
}
?>
</body>
</html>