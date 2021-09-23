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
$fnme=$_REQUEST['fname'];
$lnme=$_REQUEST['lname'];
$phn=$_REQUEST['Phoneno'];
$email=$_REQUEST['Emailid'];
$createpass=$_REQUEST['cpassword'];
$confirmpass=$_REQUEST['password'];


$query=mysqli_query($con,"INSERT INTO  signup (firstname, lastname, phoneno, email, createpassword, confirmpassword) VALUES ( '$fnme', '$lnme', '$phn', '$email', '$createpass', '$confirmpass')");
echo "Added Successfully";
}


?>



</body>
</html>
