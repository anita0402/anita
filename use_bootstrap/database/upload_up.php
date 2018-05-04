<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','bhumti')
?>
<?php
ob_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['update']))
{
$img=$_POST['img'];
$sign=$_POST['sign'];
$principal=$_POST['prisign'];
$parents=$_POST['parsign'];
$smc=$_POST['smc'];
echo "<pre>";
print_r($_REQUEST);
echo $query=mysqli_query($con,"UPDATE upload SET image='$img', signature='$sign',principal_sign='$principal',parent_sign='$parents',smc_sign='$smc' WHERE id='id'");

$query=mysqli_query($con,"insert into upload(
image, signature, principal_sign, parent_sign, smc_sign)VALUES('$img','$sign','$principal','$parents','$smc')");
}
}
?>
</body>
</html>
