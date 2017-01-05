<!DOCTYPE !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<link rel="stylesheet" href="css/iRoot.css">
<link rel="icon" href="images/iRoot.jpg">
<meta charset="UTF-8">
<title>U.S. Department of Internet Security Home Page!!!!!!</title>
</head>   
<body>
<?php
include('includes/_header.php');

        
            
        if ($_GET["cnt"] == "searchComments") 
            {
                
                include('controller/searchComments.php');
                echo
                include('includes/_about_iSecurity.php');
            }
            
        if ($_GET["cnt"] == "" || $_GET["cnt"] == "main")
           {
                
                include('controller/searchComments.php');
                include('includes/_about_iSecurity.php');
                echo "<br/><br/>";
                include('includes/_footer.php'); 
                
            }
            
            
             if ($_GET["cnt"] == "guestBook") 
            {
                include('controller/guestBook.php');
                
                
            }
            
            
            if ($_GET["cnt"] == "guestBook" && $_GET["email"] <> "" && $_GET["comment"] <> "") 
            {
                include('view/guestBook.php');
                
                
            }
?>
</body>
</htm