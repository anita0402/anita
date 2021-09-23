<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TAJ HOTEL</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>
function booking()
{
var a=document.forms["bookingfrm"] ["fname"].value;
if(a=="")
{
alert("firstname must be filled out");
return false;
}
var b=document.forms["bookingfrm"] ["adharname"].value;
if(b=="")
{
alert("addhar number must be filled out");
return false;
}
}
</script>
<body>
<div class="wrapper">
<div class="main"
>
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
<img src="img/download.png" />
</div>

<div class="welcome">
<center>
<h1>booking form</h1>
</center>
</div>
<div class="formarea">
<form method="post"  onsubmit="return booking()" name="bookingfrm" action="insertadmission.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="" placeholder="Enter your name"><br><br>
  <label for="lname">last name:</label>
  <input type="text" id="lname" name="lname" value="" placeholder="Enter your name"><br><br>
  
  <label for="Aadhaarno">Aadhaar-no:</label>
  <input type="text" id="Aname" name="Aname" value="" placeholder="Enter your Aadhaar no"><br><br>
  <label for="Emailaddress">Email-adderss:</label>
  <input type="text" id="ename" name="ename" value="" placeholder="Enter your email adress"><br><br>
  <label for="Phoneno">Phone-no:</label>
  <input type="text" id="pname" name="pname" value="" placeholder="Enter your phone no" /><br><br>
  <label for="from">From :</label>
  <input type="text" id="ffname" name="gname" value="" placeholder="Enter your date" /><label for="to" id="fname">to:</label>
  <input type="text" id="ftname" name="iname" value="" placeholder="Enter your valid date"><br><br><br>
  <label for="Time">Time:</label>
  <input type="text" id="tname" name="tname" value="" placeholder="Enter your time"><label for="too">too:</label>
  <input type="text" id="tnname" name="tnname" value="" placeholder="Enter your valid time"><br><br>
  <label for="rooms">Rooms</label>
  

<select id="Rooms"  name="rname"value="" placeholder="Select your Rooms">
<option value="Select" >Select</option>
  <option value="deluxeRoom" >DeluxeRoom</option>
  <option value="SingleRoom">SingleRoom</option>
  <option value="Ex Room" >Ex Room</option>
  <option value="Royal Room" >Royal Room</option>
  <option value="Classic Room" ">Classic Room</option>
</select>
   <label for="rooms Booking"placeholder="Select your Room">Rooms quantity</label>
  <select id="Rooms" >
  <option value="Sele
  <select id="Rooms Quantity">
  <option value="select">select</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  
</select><br><br><br>
<label for="Book"></label><input type="submit" id="button"  name="submit"  value="Book">
<label for="Cancel"></label><input type="submit" id="button"  name="button" value="Cancel"></form>





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
</body>
</html>
