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
$name=$_POST['names'];
$rel=$_POST['relation'];
$bal=$_POST['balance'];
$date=$_POST['date'];
$addr=$_POST['address'];
$pno=$_POST['pno'];
$rcpt=$_POST['receipt_no'];
$grp=$_POST['grp'];
echo "<pre>";
print_r($_REQUEST);

echo $query=mysqli_query($con,"UPDATE srankshk SET name='$name', relation='$rel', balance='$bal', date='$date',address='$addr', pno='$pno', receiptno='$rcpt', grp='$grp' WHERE id='$id'");

echo $query=mysqli_query ($con,"INSERT INTO `srankshk` ( `name`, `relation`, `balance`, `date`, `address`, `pno`, `receiptno`, `grp`) VALUES ( '$name', '$rel', '$bal', '$date', '$addr', '$pno', '$rcpt', 'grp')");

if($query)
{
$msg="successfully updated!!";
header('location:srankshk_view.php');
}
}

}
ob_end_flush();
?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select* from srankshk where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>

<form method="post" name="frm" enctype="multipart/form-data">
<label>name</label>
<input type="text" name="names" value="<?php echo $row['name']; ?>" />
<label>name</label>
<input type="text" name="relation" value="<?php echo $row['relation']; ?>"  />
<label>name</label>
<input type="text" name="balance" value="<?php echo $row['balance']; ?>" />
<label>name</label>
<input type="date" name="date" value="<?php echo $row['date']; ?>" />
<label>name</label>
<input type="text" name="address" value="<?php echo $row['address']; ?>" />
<label>name</label>
<input type="text" name="pno" value="<?php echo $row['pno']; ?>" />
<label>name</label>
<input type="text" name="receipt_no" value="<?php echo $row['receiptno']; ?>" />
<label>name</label>
<input type="text" name="grp" value="<?php echo $row['grp']; ?>" />

<input type="submit" name="update" value="update" />
</form>

<?php
}
}
?>
</body>
</html>
