<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','bhumti');
echo "successfully connected";
?>
<?php
if(isset($_REQUEST['sbit']))
{
echo"<pre>";
print_r($_REQUEST);
$img=$_REQUEST['img'];
$sign=$_REQUEST['sign'];
$principal=$_REQUEST['prisign'];
$parents=$_REQUEST['parsign'];
$smc=$_REQUEST['smc'];

 echo $query=mysqli_query($con,"insert into upload(
image, signature, principal_sign, parent_sign, smc_sign)VALUES('$img','$sign','$principal','$parents','$smc')");
echo "added successfully";
}
	  if(move_uploaded_file($_FILES["file1"]["tmp_name"],"images/$image"))
	 {
	 	 mysql_query($str);
//		 echo "Record saved";
	}

header("location:upload_sel.php");
?>


</body>
</html>
