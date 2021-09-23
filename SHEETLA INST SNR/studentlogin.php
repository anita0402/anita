<html>
<head>
<title>SHEETLA INSTITUTE</TITLE>

</HEAD>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<script>
function validate()
{
var a=document.forms["form2"]["fname"].value;
if(a=="")
{
alert("Firstname must be filled out");
return false;
}


var b=document.forms["form2"]["lname"].value;
if(b=="")
{
alert("Lastname must be filled out");
return false;
}


<!--var c=document.forms["form2"]["Phoneno"].value;
if(c=="")
{
alert("Phone No. must be filled out");
return false;
}-->



<!--var d=document.forms["form2"]["password"].value;
if(d=="")
{
alert("Password must be filled out");
return false;
}*/

var e=document.forms["form2"]["Emailid"].value;
if (e=="")
  {
   
    alert("You have entered an invalid email address!")
    return false;
}

}

/*function validaate()
{
var a=document.forms["form3"]["password"].value;
if(a=="")
{
alert("Password must be filled out");
return false;
}
}
</script>-->
<BODY>

<div class="wrapper">
<div class="main">
<div class="logo">
<img src="image/Logo01.png"/>
</div>
<div class ="header">
<p>Sheetla institute <br><i>(run by:sheetla shiksha samiti regd. under HP socitey act 2006 with Regd. NO. sundernagar/7/2018)</i></p>



</div>
<div class="address">
<p>mobileno:9444444455<br>
9858489668<br>

email:sheetlainstitutesnr@gmail.com
</p>
</div>
<div class="menu">
<ul>
<li class="active"><a href="home.php">home</a></li>
<li> <a href="about.php">about us</a></li>
<li><a href="gallery.php">gallery</a></li>
<li><a href="courses.php">courses</a>
	<ul class="submenu"><li><a href="dca.php">1 year</a></li>
		<li><a href="basiccomp.php">3 & 6 months</a></li>
		<li><a href="account.php">E-accountant</a></li>
		</li>
		</ul>
<li><a href="faculty.php">faculty</a></li>
<li><a href="contact.php">contact us</a></li>
<li><a href="studentlogin.php">login/sign up</a></li>
</ul>
</div>

<div class="noticeboard"><p>QUICK LINKS</p>
<ul><li>online admission</li>
<li>MD message</li>
<li>courses</li>
<li>photogallery</li>
</ul>
<p>STUDENT LINKS</p>
<ul><li>datesheet</li>
<li>download</li>
<li>timetable</li>
<li>syllabus</li>
<li>training</li>
</ul>
<p>NOTICE BOARD</p>
<ul>
<li><marquee direction="up" behaviour="scroll" bgcolor="#FFFF33" >admission open 2021</marquee></li>
<li><marquee direction="up" behaviour="scroll" bgcolor="#FFFF33" >result of 2020     </marquee></li>
<li><marquee direction="up" behaviour="scroll" bgcolor="#FFFF33" >batch 2021-2022    </marquee></li>
</ul>
</div>

<div class="logwork">
<marquee><img src="news-img.gif"/>Admission open for dca and pgdca courses batch 2021-2022 in sheetla institute sundernagar distt mandi (h.p.)</marquee>
</div>
<div class="studentsignup">


<h1>SIGN UP</h1>


<form name="form2" method="post"  action="insertsignup.php"  onsubmit="return validate()"> 
<table>
<tr>
<td><label for="fname">First Name:</label></td><td><input type="text" id="fname" placeholder="Enter your First Name" name="fname"/></td></tr>

<tr>
<td><label for="fname">Last Name:</label></td><td><input type="text" id="lname" placeholder="Enter your Last Name" name="lname"/></td></tr>

<tr>
<td><label for="Phone NO">Phone No:</label></td><td><input type="text" id="Phoneno" placeholder="Enter your Phone No." name="Phoneno"/></td></tr>

<tr>
<td><label for="Email-id:">Email:</label></td><td><input type="text" id="Emailid" placeholder="Enter your Email" name="Emailid"/></td></tr>

<tr>
<td><label for="Create password:">Create Password:</label></td><td><input type="text" id="cpassword" placeholder="Create New Password" name="password"/></td></tr>

<tr>
<td><label for="confirm password">Confirm Password:</label></td><td><input type="text" id="password" placeholder="Confirm Your Password" name="password"/></td></tr>

<tr><td><input type="submit" name="submit" value="SIGN UP" id="submit"></td>
<td><input type="submit" value="Cancel"id="cancel"></td>
</tr>
</label>
</tr>
</table>
</form>
</div>




<div class="studentlogin">


<h1>LOGIN</h1>

<form name="form3" method="post"   action="logincode.php"> 
<table>
<tr>
<td><label for="Email-id:">Email:</label></td><td><input type="text" id="Emailid" placeholder="Enter your Email" name="Emailid"/></td></tr>

<tr>
<td><label for="Create password:">Password:</label></td><td><input type="text" id="password" placeholder="Enter Your Password" name="password"/></td></tr>

<tr><td><input type="submit"  value="LOGIN" id="submit"></td>
<td><input type="submit" value="Cancel"id="cancel"></td>
</tr>


</table>
</form>
</div>









<div class="footer">

<ul>
<li class="active"><a href="home.php">home</a></li>
<li> <a href="about.php">about us</a></li>
<li>privacy policy</li>
<li><a href="contact.php">contact us</a></li>

</ul>

<br>
<p>@All contents are provided by Sheetla Institute Sunder nagar, Mandi(HP)</p>
<a href="#" class="fa fa-facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" class="fa fa-twitter"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" class="fa fa-instagram"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" class="fa fa-envelope"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" class="fa fa-linkedIn"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



</div>
</div>
</div>
</body>
</html>

