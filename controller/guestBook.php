<!DOCTYPE !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<script type="text/javascript" src="/scripts/javascript/iRoot.js"></script>
<link rel="stylesheet" href="/css/iRoot.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1, maximum-scale=1" > 
<title>U.S. Department of Internet Security Guestbook Page</title>
<body>
<blockquote>
<h1>U.S. Department of Internet Security Home Page</h1>   
<a href="https://rubypractice-dnorwood.c9users.io/users/sign_in">Sign In</a> | <a href="https://rubypractice-dnorwood.c9users.io/users/sign_up">Sign Up</a> | <a href="http://www.usa.gov">USA.gov</a>
<h3 style="color:#ffaa00"><b>Please sign the U.S. Department of Internet Security guestbook.</b></h3>
<br/>
<img src="/images/iRoot.jpg" alt="iSecurity logo" /><br/><br/>
<form action="model/guestBook.php" name="guestForm" onsubmit="return validateForm_guest()" method="get">
First and last name:<input type="text" name="name" maxlength="50" size="25"><br/><br/>
<strong>* Email address:</strong><input type="text" name="email" maxlength="50" size="25"/><br/><br/>
                 <input type="hidden" name="cnt" value="guestBook" />
Birthdate: <input type="text" name="birthdate" maxlength="20" size="20"/><br/><br/>
<strong>* Comment:</strong><br/><br/><textarea name="comment" id="comment" maxlength="1000" style="height:200px; width:250px"></textarea><br/><br/>
<input type="submit" value="Add Comment" id='addCommentBtn'/><br/>
</form>
<?php 
$url="index.php?cnt=main";
echo "<a href=$url><button id='homeBtn'>Home</button></a>"; ?>
</blockquote>
</body>
</html>