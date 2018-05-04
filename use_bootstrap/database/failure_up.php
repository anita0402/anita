<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','bhumti');
?>
<?php
ob_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
if (isset($_POST['update']))
{
$roll=$_POST['roll_nos'];
$exam=$_POST['exams'];
$year=$_POST['years'];
$snkay=$_POST['snkay'];
$board=$_POST['boards'];
$school=$_POST['schools'];
$reg=$_POST['reg_no'];
$subje=$_POST['subjects'];

echo "<pre>";
print_r($_REQUEST);

echo $query=mysqli_query($con,"UPDATE failuestd SET roll='$roll', exam='$exam', years='$year', snkay='$snkay', boards='$board', schools='$school', regno='$reg', subj='$subje' WHERE id='$id'");

$query=mysqli_query ($con,"INSERT INTO `failurestd` ( `roll`, `exam`, `years`, `snkay`, `boards`, `schools`, `regno`, `subj`) VALUES ( '$roll', '$exam', '$year', '$snkay', '$board', '$school', '$reg', '$subje')");

if($query)
{
$msg="successfully updated!!";
header('location:failure_sel.php');
}
}

}
ob_end_flush();
?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select* from failurestd where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>

<form method="post" name="frm" enctype="multipart/form-data">
<label>name</label>
<input type="text" name="roll_nos" value="<?php echo $row['roll']; ?>" />
<label>name</label>
<input type="text" name="exams" value="<?php echo $row['exam']; ?>"  />
<label>name</label>
<input type="text" name="years" value="<?php echo $row['years']; ?>" />
<label>name</label>
<input type="date" name="snkay" value="<?php echo $row['snkay']; ?>" />
<label>name</label>
<input type="text" name="boards" value="<?php echo $row['boards']; ?>" />
<label>name</label>
<input type="text" name="schools" value="<?php echo $row['schools']; ?>" />
<label>name</label>
<input type="text" name="reg_no" value="<?php echo $row['regno']; ?>" />
<label>name</label>
<input type="text" name="subjects" value="<?php echo $row['subj']; ?>" />

<input type="submit" name="update" value="update" />
</form>

<?php
}
}
?>
</body>
</html>
