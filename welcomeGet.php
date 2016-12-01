<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>U.S. Department of Internet Security Welcome Page</title>
<style>
    a:link {color:#ff9900;}
    a:visited {color:#f9900;}
    a:hover {background:#ffebcc;}
    blockquote {background: #ffebcc;}
</style>
</head>   
<body>
<blockqoute>
Hello, <?php echo $_POST["name"]; ?><br/>
Your mail address is: <?php echo $_POST["email"]; ?><br/>
Your birthday is: <?php echo $_POST["birthdate"]; ?><br/>
THANK YOU FOR YOUR COMMENT: <?php echo $_POST["comment"]; ?>
<br/>
<br/>
<a href="https://dnorwood-php-dnorwood.c9users.io" >Home</a>
</blockquote>
</body>
</html>