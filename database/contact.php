<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script>
function form()
{
var x=document.forms["frm"]["name"].value;
if(x=="")
{
alert("name must be fill out");
return false;
}
var y=document.forms["frm"]["fname"].value;
if(y=="")
{
alert("please enter the father name");
return false;
}
var a=document.forms["frm"]["mname"].value;
if(a=="")
{
alert("please enter the mother name");
return false;
}
var b=document.forms["frm"]["dob"].value;
if(b=="")
{
alert("enter the date of birth");
return false;
}
var c=document.forms["frm"]["addr"].value;
if(c=="")
{
alert("please enter the full address");
return false;
}

}



</script>
<body>
<?php
$con=mysqli_connect("localhost", "root","","form");
echo "connected successfully";
?>
<?php
if(isset($_REQUEST['btn']))
{
$name=$_REQUEST['name'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$dob=$_REQUEST['dob'];
$addr=$_REQUEST['addr'];
$query=mysqli_query($con,"INSERT INTO `form`.`contactfrm` ( `name`, `fathername`, `mothername`, `dob`, `address`) VALUES ('$name', '$fname', '$mname', '$dob', '$addr')");
}
?>
<form method="post" name="frm" onsubmit="return form()">
<table width="200" border="1">
  <tr>
    <td>name:</td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td>father's name:</td>
    <td><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td>mother's name:</td>
    <td><input type="text" name="mname" /></td>
  </tr>
  <tr>
    <td>dob:</td>
    <td><input type="date" name="dob" /></td>
  </tr>
  <tr>
    <td>address:</td>
    <td><input type="text" name="addr" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="btn" /></td>
  </tr>
</table>


</form>
</body>
</html>
