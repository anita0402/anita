<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','anita');
echo "successfully connected";
?>
<?php
if(isset($_REQUEST['submit']))
{
echo "<pre>";
print_r($_REQUEST);
$fn=$_REQUEST['fname'];
$ln=$_REQUEST['lname'];

$query=mysqli_query($con,"insert into user(fname,lname)VALUES('$fn','$ln')");
echo "Added Successfully";
}
?>
<form method="post">
<table>
<tr><td>name</td>
<td>
<input type="text" name="fname" /></td></tr>
<tr><td>lname</td>
<td><input type="text" name="lname" /></td></tr>
<tr><td><input type="submit" name="submit" /></td></tr>
</table>
</form>
</body>
</html>
