<!DOCTYPE !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<link rel="stylesheet" href="css/iRoot.css">
<link rel="icon" href="images/iRoot.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1, maximum-scale=1" > 
<title>U.S. Department of Internet Security Home Page!!!!!!!</title>
</head>   
<body>
<?php
        
            
        if ($_GET["cnt"] == "" || $_GET["cnt"] == "main")
           {
                include('includes/_header.php');
                echo "<br/><br/>";
                include('includes/_footer.php'); 
           }
            
            
             if ($_GET["cnt"] == "guestBook") 
           {
                 
                include('controller/guestBook.php');
           }
            
          ?>
</body>
</htm