<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
  <?php
$con=mysqli_connect('localhost','root','','update');
echo "successfully connected";
?>
<?php

if(isset($_GET['id']))
{
$id=$_GET['id'];
if (isset($_POST['update']))
{

    $roll=$_REQUEST['roll'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
echo "<pre>";
print_r($_REQUEST);
echo $query=mysqli_query($con,"UPDATE student SET roll='$roll', name='$name', email='$email' WHERE id='$id'");




if($query)
{
$msg="successfully updated!!";
header('location:select.php');
}
}

}
ob_end_flush();
?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select* from student where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>


<form method="post">
<input type="text" name="roll" value="<?php echo $row['roll'] ?>" />
<input type="text" name="name" value="<?php echo $row['name'] ?>"  />
<input type="text" name="email" value="<?php echo $row['email'] ?>" />

<input type="submit" id="update" name="update" value="Edit" />
</form>

<?php } } ?>

</body>
</html>