<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>
function validate()
{
var a=document.forms["registrationfrm"] ["fname"].value;
if(a=="")
{
alert("firstname must be filled out");
return false;
}
var a=document.forms["registrationfrm"] ["lname"].value;
if(a=="")
{
alert("lastname must be filled out");
return false;
}
var c=document.forms["registrationfrm"] ["Pname"].value;
if(c=="")
{
alert("phoneno must be filled out");
return false;
}
var d=document.forms["registrationfrm"] ["ename"].value;
if(d=="")
{
alert("Emailaddress must be filled out");
return false;
}
var d=document.forms["registrationfrm"] ["create password"].value;
if(d=="")
{
alert("password must be create");
return false;
}
var d=document.forms["registrationfrm"] ["confirm password"].value;
if(d=="")
{
alert("password must be confirmed");
return false;
}
var d=document.forms["registrationfrm"] ["submit"].value;
if(d=="")
{
alert("signup must be successfully");
return false;
}






}
</script>
<body>
<div class="wrapper">
<div class="main">
<div class="header">
<div class="logo">
<img src="img/download.jfif" />
</div>


<div class="menus">
<ul>
<li class="home"><a href="home.php">Home</a></li>
<li><a href="accommodation.php">Accommodation</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="features.php">feature</a>
<ul><li> <a href="Aboutus.php">about us</li>
<li><a href="OurStaff.php">our staff</li>
</ul>
</li>
<li><a href="contact us.php">Contact us</a></li>
<li><a href="signup.php">signup </a></li>

</ul>
</div>
</div>
<div class="image">
<img src="img/cq5dam.web.1280.1280.jpeg"/>
</div>
<div="welcome">
<center>
<h1>Registration</h1>

<table border="solid">
<div class="formarea">
<form method="post" action="" onsubmit="return validate()" name="registrationfrm">
<tr>
<td><label for="fname">First name:</label><input type="text" id="fname" name="fname" /></td></tr>
<br/>
<tr><td><label for="fname">Last name:</label><input type="text" id="lname" name="Lname" /></tr></td>
</br>
<tr><td><label for="PhoneNo">Phone- No:</label><input type="text" id="Phoneno" name="Phoneno" /></br></tr></td>
<tr><td><label for="Emailid">Email-id:</label><input type="text" id="emailid" name="emailid" /><br/></tr></td>
<tr><td><label for="createpassword">Create password:</label><input type="password" id="createpassword" name="Create- passwords" /></br></tr></td>
<tr><td><label for="Confirmpassword">confirm-password:</label><input type="password" id="confirmpasswords" name="confirmpassword /></tr></td>
</br></br></br>
<tr><td><label for="Submit"></label><input type="submit" id="button"  name="button" value="Submit"></br></tr></td>
</table>
</center>

</form>
</div>
<Div class="footer">
<div class="leftfooter">
<img src="img/download (22).jpg" />
<p>Lorem ipsum dolor sit amet, conser adipiscing elit. In consectetur tincidunt dolor.</p>
<br />
<p><i class="fa fa-map-marker" style="font-size:48px;color:red"></i>St Amsterdam finland,
United Stats of AKY16 8PN</p>
</div>

<div class="centerfooter">
<ul>
<li class="home"><a href="home.php">Home</a></li>
<li><a href="accommodation.php">Accommodation</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="features.php">feature</a>
<li><a href="contact us.php">Contact us</a></li>
<li><a href="signup.php">signup </a></li>
</ul>
</div>
<div class="rightfooter">
<p>WE ARE GLOBAL</p>
<img src="img/footer-map-two.jpg" />
</div>
<p class="cpy">&copy; 2021 taj hotel.all rights are reserved.</p>
</div>

</div>
</div>
</div>
</body>
</html>
