<!DOCTYPE !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<link rel="stylesheet" href="/css/iRoot.css">
<link rel="icon" href="/images/iRoot.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1, maximum-scale=1" > 
<title>SEARCH RESULTS</title>
</head>
<body>
    
<?php
class data_out_cls {
    

    
  public function data_out_fnc($result) {
        include("/home/ubuntu/workspace/includes/_header.php"); 	
        include("/home/ubuntu/workspace/controller/searchComments.php");
        if (($result->num_rows != 0)) { 
                echo "<blockquote><h1>SEARCH RESULTS:</h1>";            
                echo "<table border='1' id='searchCommentsTbl'>"; 
                echo "<tr>";   
                echo "<th>EMAIL_ADDRESS</th>";
                echo "<th>USER_COMMENTS</th>";
                echo "</tr>";
            
            while($row = $result->fetch_array(MYSQLI_NUM)) {
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "</tr>";
                }
        } 
      
      if (($result->num_rows == 0)) { 
          
                echo "<blockquote><strong>0 results</strong>";
             }  
        
    echo "</table id='searchCommentsTbl'><br/><br/>";
    echo "<a href='/index.php?cnt=guestBook'>Add another comment</a> ";
    echo "<a href='/index.php?cnt=searchComments'>Search comments</a> "; 
    echo "<a href='/index.php?cnt=main'>Home</a></blockquote>";
  }
}
?>



</body>
</html>