<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TAJ HOTEL</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>
function validate()
{
var a=document.forms["contactusfrm"] ["fname"].value;
if(a=="")
{
alert("firstname must be filled out");
return false;
}
var a=document.forms["contactusfrm"] ["lname"].value;
if(a=="")
{
alert("lastname must be filled out");
return false;
}
var c=document.forms["contactusfrm"] ["ename"].value;
if(c=="")
{
alert("Emailaddress must be filled out");
return false;
}
var d=document.forms["contactusfrm"] ["pname"].value;
if(d=="")
{
alert("phoneno must be filled out");
return false;
}
var d=document.forms["contactusfrm"] ["submit"].value;
if(d=="")
{
alert("contact must be successfully");
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
<div class="contact">
<img src="img/Untitled.png" />
</div>

<div class="welcome">
<center>
<h1> Contact Us Form</h1>
</center>
</div>
<center>
<div class="formarea">
<form method="post" action="insrtcontact.php" onsubmit="return validate()" name="contactusfrm">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="" placeholder="Enter your name"><br><br>
  <label for="lname">last name:</label>
  <input type="text" id="lname" name="lname" value="" placeholder="Enter your name"><br><br>
 
  <label for="Emailaddress">Email-adderss:</label>
  <input type="text" id="Aname" name="ename" value="" placeholder="Enter your email adress"><br><br>
  <label for="Phoneno">Phone-no:</label>
  <input type="text" id="pname" name="pname" value="" placeholder="Enter your phone no"><br><br>
  
  <input type="submit" name="submit" value="submit" />

</form> 

</div>
</center>

















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
</body>
</html>
