<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','sheetla');
echo "successfully connected";
?>
<?php
if(isset($_REQUEST['submit']))
{
echo "<pre>";
print_r($_REQUEST);
$fn=$_REQUEST['name'];
$ln=$_REQUEST['lastname'];
$fthrnme=$_REQUEST['fathername'];
$mthrnme=$_REQUEST['mothername'];
$cours=$_REQUEST['courses'];
$email=$_REQUEST['email'];
$gen=$_REQUEST['gender'];
$dur=$_REQUEST['duration'];
$phn=$_REQUEST['phone'];
$tfees=$_REQUEST['totalfees'];
$adrs=$_REQUEST['address'];
$date=$_REQUEST['date'];
$photo=$_REQUEST['filename'];
$sign=$_REQUEST['filename'];



$query=mysqli_query($con,"INSERT INTO  admission (firstname, lastname, fathersname, mothersname, courses, email, gender, duration, phoneno, totalfees, address, date, photoup, signup) VALUES ( '$fn', '$ln', '$fthrnme', '$mthrnme', '$cours', '$email', '$gen', '$dur', '$phn', '$tfees', '$adrs', '$date', '$photo', '$sign')");
echo "Added Successfully";
}

header('location:admission.php');
?>


</body>
</html>
