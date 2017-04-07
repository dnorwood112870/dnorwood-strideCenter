<!DOCTYPE !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<link rel="stylesheet" href="/css/iRoot.css">
<script type="text/javascript" src="/scripts/javascript/iRoot.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1, maximum-scale=1" > 
<title>SEARCH FOR COMMENTS PAGE (iSearch)</title>
</head> 
<body>

<h3 style="color:#ffaa00"><b>Please enter an email address to search for comments about iSEC!!!</b></h3>
<br/>
<form action="/model/searchComments.php" name="iSearch" onSubmit="return validateForm_search()"/>
<img src="/images/iRoot.jpg" alt="iSecurity logo" /><br/><br/>
<strong>Email: </strong><input type"email" name=email id="email" maxlength="50" size="25">
<input type="hidden" name="cnt" value="searchComments" /> 
<input type="submit" value="iSearch" id="iSearchBtn"/>
</form>
<a href="/index.php?cnt=guestBook"><button id="iSearchBtn">Sign Guestbook</button></a>
<br/>
<br/>
</body>
</html>