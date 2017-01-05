<html>
<head>
<link rel="stylesheet" href="/css/iRoot.css">
<link rel="icon" href="/images/iRoot.jpg">
<meta charset="UTF-8">
<title>Guest Book of the U.S. Department of Internet Security</title>
</head>
<body>
<?php
class data_out_cls {
 	
  public function data_out_fnc($result) {
    if ($result == TRUE) {
        
      
        include("/home/ubuntu/workspace/includes/_header.php");
        echo "<blockquote><h1>NEW COMMENT ADDED!!!</h1><br/></blockquote>";
        require("/home/ubuntu/workspace/controller/searchComments.php");
        
    }
    
    else {
      
      echo "<blockquote>PLEASE TRY AGAIN!!!</blockquote>";
      require("/home/ubuntu/workspace/controller/searchComments.php");
          
    }
    
    
  }
  
  
}
  

?>
</body>
</html>