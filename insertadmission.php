<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','taj_hotel');
echo "successfully connected";
?>
<?php
if(isset($_REQUEST['submit']))
{
echo "<pre>";
print_r($_REQUEST);
$fn=$_REQUEST['fname'];
$ln=$_REQUEST['lname'];
$addhar=$_REQUEST['Aname'];
$email=$_REQUEST['ename'];
$phone=$_REQUEST['pname'];
$from=$_REQUEST['gname'];
$to=$_REQUEST['iname'];
$time=$_REQUEST['tname'];
$too=$_REQUEST['tnname'];
$roomname=$_REQUEST['rname'];


$query=mysqli_query($con, "INSERT INTO `taj_hotel`.`booking` (`firstname`, `lastname`, `addharno`, `emailid`, `phoneno`, `from`, `to`, `time`, `timeto`, `room`, `room_quantity`) VALUES ( '$fn', '$ln', '$addhar', '$email', '$phone', '$from', '$to', '$time', '$too', '$roomname')");

echo "Added Successfully";
}

?>


</body>
</html>
