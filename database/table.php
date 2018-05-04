<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost", "root","","anita");
echo "successfully connected";
?>
<?php
if (isset($_REQUEST['submit']))
{
$fn=$_REQUEST['fname'];
$ln=$_REQUEST['lname'];
$em=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$ph=$_REQUEST['phone'];


$query=mysqli_query($con,"INSERT INTO abc (
`fname` ,
`lname` ,
`email` ,
`password` ,
`phoneno`
)VALUES(
 '$fn', '$ln', '$em', '$pass', '$ph')");
}
?>


<form method="post">
<table width="200" border="1" align="center">
  <tr>
    <td>fname</td>
    <td><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td>lname</td>
    <td><input name="lname" type="text" /></td>
  </tr>
  <tr>
    <td>email</td>
    <td><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td>password</td>
    <td><input type="text" name="pass" /></td>
  </tr>
  <tr>
    <td>phone no</td>
    <td><input type="text" name="phone" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" /></td>
   
  </tr>
 
</table>

</form>
</body>
</html>
