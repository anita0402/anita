<html>
<head>
<title>SHEETLA INSTITUTE</TITLE>

</HEAD>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>

function validate()
{
var a=document.forms["form1"]["name"].value;
if(a=="")
{
alert("Firstname must be filled out");
return false;
}




var b=document.forms["form1"]["lastname"].value;
if(b=="")
{
alert("Lastname must be filled out");
return false;
}






var c=document.forms["form1"]["fathername"].value;
if(c=="")
{
alert("Fathername must be filled out");
return false;
}




var d=document.forms["form1"]["mothername"].value;
if(d=="")
{
alert("Mothername must be filled out");
return false;
}




var e=document.forms["form1"]["phone"].value;
if(e=="")
{
alert("Phone No. must be filled out");
return false;
}




var f=document.forms["form1"]["duration"].value;
if(f=="")
{
alert("Duration must be filled out");
return false;
}





var g=document.forms["form1"]["date"].value;
if(g=="")
{
alert("Date must be filled out");
return false;
}




var h=document.forms["form1"]["filename"].value;
if(h=="")
{
alert("Upload your Photo");
return false;
}



}
</script>
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
<div class="admwork">
<marquee><img src="news-img.gif"/>Admission open for dca and pgdca courses batch 2021-2022 in sheetla institute sundernagar distt mandi (h.p.)</marquee>
<div class="admission">

<b>ADMISSION FORM </b>

<form name="form1" method="post"  onsubmit="return validate()" action="insertadmission.php"> 
<table>
<tr><td><label>First Name :</label></td>
<td><input type="text" placeholder="Enter Your First Name" name="name" size="15"/></td>
<td><label>Last Name :</label></td>
<td><input type="text" placeholder="Enter Your Last Name" name="lastname" size="15"/></td>
</tr>

<tr><td><label>Father Name :</label></td>
<td><input type="text" placeholder="Enter Your Father Name" name="fathername" size="15"/></td>
<td><label>Mother Name :</label></td>
<td><input type="text" placeholder="Enter Your Mother Name" name="mothername" size="15"/></td>
</tr>
<tr>
<td><label>Courses :</label></td>
<td>
<select name="courses">  
<option value="CHOOSE">Choose</option>  
<option value="BASIC">BASIC</option>
<option value="CSS">CSS</option>
<option value="DCA">DCA</option>
<option value="PGDCA">PGDCA</option>  
<option value= "ACCOUNTANT">ACCOUNTANT</option>
<option value="TALLYER">TALLYER9</option>
<option value="GST">GST</option>
<option value="INDUSTRIAL TRAINING">INDUSTRIAL TRAINING</option>
<option value="ENGLISH SPEAKING">ENGLISH SPEAKING</option>
<option value="COACHING AND TUITION">COACHING AND TUITION</option>
<option value="GK">GK</option>
</select></td>

<td><Label>E-Mail:</Label></td>
<td><input type="email" placeholder="Enter Your E-Mail " id="email" name="email"> </td>
</tr>
<tr><td><label>Gender :</label>
</td>
<td>Male:<input type="radio" name="gender"/>      
         <input type="radio" name="gender"/> Female   
         <input type="radio" name="gender"/> Other    </td>
<td><Label>Duration:</Label></td>
<td><input type="duration" id="duration" placeholder="Time Period" name="duration"> </td>
</tr>

<tr><td><label>Phone no:</label></td>
<td><input type="text" placeholder="Enter Your Mobile No." name="phone" size="10"> </td>

<td><Label>Total Fees:</Label></td>
<td><input type="total fees" id="total fees" name="totalfees"> </td>

</tr>
<tr><td><label>Address:</label></td>
<td><textarea cols="35" rows="5" name="address" value="address">    
</textarea></td>
<td><label for="date">Date:</label></td>
<td>  <input type="date" id="date" name="date"></td>

<tr><td>
<p>Upload PHOTO:</p></td><form>
 <td><input type="file" id="myFile" name="filename">
</form></td>


<td>
<p>Upload Signature:</p></td><form>
 <td><input type="file" id="myFile" name="filename">
</form></td>
</tr>

<tr><td><input type="submit" name="submit" value="Submit" id="submit"></td>
<td><input type="submit" value="Cancel"id="cancel"></td>
</tr>

</table>
</form> 
</div>    

</div>
<div class="footer">

<ul>
<br>
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

