<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','bhumti');
//echo "successfully connected ";
?>
<?php
if(isset($_REQUEST['submit']))
{
echo"<pre>";
print_r($_REQUEST);
$nme=$_REQUEST['std_name'];
$fn=$_REQUEST['ftr_name'];
$mn=$_REQUEST['mtr_name'];
$dob=$_REQUEST['dd'];
$occupation=$_REQUEST['occupation'];
$category=$_REQUEST['category'];
$addhar=$_REQUEST['adhar'];
$email=$_REQUEST['e_mail'];
$phone=$_REQUEST['pno'];
$address=$_REQUEST['address'];
$sex=$_REQUEST['male'];
$subcategory=$_REQUEST['subcategory'];
echo $query=mysqli_query($con,"insert into personal(
Name, fname, mname, dob, occupation, category, addhar_card_no, email, phone_no, address, sex, sub_category 
)Values ('$nme','$fn','$mn','$dob','$occupation','$category','$addhar','$email','$phone','$address','$sex','$subcategory')");

}

?>
</body>
</html>
