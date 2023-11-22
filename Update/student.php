<html>
	<head><title>ADMISSION FORM</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>

	<script>
function  validate()
{
var a=document.forms["myform"]["roll"].value;
if (a=="")
{
	alert("PLEASE ENTER YOR ROLL NO");
	return false;
}
	var b=document.forms["myform"]["name"].value;
	if (b=="")
{
    alert("PLEASE ENTER YOUR FULLLNAME");
    return false;
}
    var c=document.forms["myform"]["email"].value;
    if (c=="")
{
   alert("PLEASE ENTER YOUR EMAIL");
    return false;
}
}

</script>



<body>

<?php
$con=mysqli_connect("localhost", "root", "", "update");
echo"";
?>

<?php
if (isset($_REQUEST['submit']))
{
$roll=$_REQUEST['roll'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];

$query=mysqli_query($con,"INSERT INTO `update`.`student` (`id` ,`roll` ,`name` ,`email`)VALUES (NULL , '$roll', '$name', '$email')");


}
?>

<h1 align="center">ADMISSION FORM</h1>
<div class="center">
<form name="myform" action="" onsubmit="return validate()" method="post">
<table>
<tr><td><label>ROLL NO:</label></td>
<td><input type="text" name="roll" placeholder="ENTER YOUR ROLL NO"></td></tr>

<tr><td><label>NAME:</label></td>
<td><input type="text" name="name" placeholder="ENTER YOUR FULLNAME"></td></tr>

<tr><td><label>EMAIL:</label></td>
<td><input type="email" name="email" placeholder="ENTER YOUR EMAIL"></td></tr>


<tr><td><input type="submit" value="Submit" id="submit" name="submit"></td></tr>


</table>
</form>
</div>
</body>
</html>