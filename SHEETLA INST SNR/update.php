<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$con=mysqli_connect('localhost','root','','sheetla');
?>
<?php
ob_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
if (isset($_POST['update']))
{
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

echo "<pre>";
print_r($_REQUEST);
echo $query=mysqli_query($con,"update  admission SET firstname='$fn', lastname='$ln', fathersname='$fthrnme', mothersname='$mthrnme', courses='$course', email='$email', gender='$gen', duration='$dur', phoneno='$phn', totalfees='$tfess', address=$'adrs', date='$date', photoup='$photo', signup='$sign' WHERE id='$id'");



$query=mysqli_query($con,"INSERT INTO  admission (firstname, lastname, fathersname, mothersname, courses, email, gender, duration, phoneno, totalfees, address, date, photoup, signup) VALUES ( '$fn', '$ln', '$fthrnme', '$mthrnme', '$cours', '$email', '$gen', '$dur', '$phn', '$tfees', '$adrs', '$date', '$photo', '$sign')");
/*echo $query=mysqli_query($con,"UPDATE loinform SET firstname='$name', lastname='$lstnme', fathername='$fname', mothername='$mname', 
email='$email', phoneno='$pno', address='$address', password='$password', image='$image' WHERE id='$id'");*/
}
if($query)
{
$msg="successfully updated!!";
header('location:admission.php');
}
}


ob_end_flush();
?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select * from admission where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>













</body>
</html>