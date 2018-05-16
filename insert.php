<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
$con=mysqli_connect('localhost','root','','login');
echo "successfully connected";

?>
<?php
if(isset($_REQUEST['btn']))
{

print_r($_REQUEST);
echo "<pre>";

$name=$_REQUEST['fstnme'];
$lstnme=$_REQUEST['lstnme'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$email=$_REQUEST['email'];
$pno=$_REQUEST['pno'];
$address=$_REQUEST['address'];
$password=$_REQUEST['password'];
$img=$_FILES['']['image'];

echo $query=mysqli_query($con,"INSERT INTO loinform(`firstname`, `lastname`, `fathername`, `mothername`, `email`, `phoneno`, `address`, `password`, `image`) VALUES ( '$name', '$lstnme', '$fname', '$mname', '$email', '$pno', '$address', '$password')");
if(move_uploaded_file($_FILES["file1"]["tmp_name"],"images/$image"))
{
    mysql_query($str);
//		 echo "Record saved";
}
}


header('location:login.php');

?>
</body>
</html>
