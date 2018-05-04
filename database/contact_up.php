<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','form');
?>
<?php
ob_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
if (isset($_POST['update']))
{
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$addr=$_POST['addr'];

echo "<pre>";
print_r($_REQUEST);

echo $query=mysqli_query($con,"UPDATE contactfrm SET name='$name', fathername='$fname', mothername='$mname', dob='$dob', address='$addr' WHERE id='$id'");

$query=mysqli_query($con,"INSERT INTO `form`.`contactfrm` ( `name`, `fathername`, `mothername`, `dob`, `address`) VALUES ('$name', '$fname', '$mname', '$dob', '$addr')");
}
if($query)
{
$msg="successfully updated!!";
header('location:contact_sel.php');
}
}



ob_end_flush();

?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select* from contactfrm where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>

<form method="post" name="frm" enctype="multipart/form-data">
<label>name:</label>
<input type="text" name="roll_nos" value="<?php echo $row['name']; ?>" />
<label>father's name:</label>
<input type="text" name="exams" value="<?php echo $row['fathername']; ?>"  />
<label>mother's name:</label>
<input type="text" name="years" value="<?php echo $row['mothername']; ?>" />
<label>dob:</label>
<input type="date" name="snkay" value="<?php echo $row['dob']; ?>" />
<label>address:</label>
<input type="text" name="boards" value="<?php echo $row['address']; ?>" />

<input type="submit" name="update" value="update" />
</form>

<?php
}
}
?>

</body>
</html>
