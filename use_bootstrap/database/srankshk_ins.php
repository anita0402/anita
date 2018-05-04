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
if(isset($_REQUEST['btns']))
{
echo "<pre>";
print_r($_REQUEST);
$name=$_REQUEST['names'];
$rel=$_REQUEST['relation'];
$bal=$_REQUEST['balance'];
$date=$_REQUEST['date'];
$addr=$_REQUEST['address'];
$pno=$_REQUEST['pno'];
$rcpt=$_REQUEST['receipt_no'];
$grp=$_REQUEST['grp'];

echo $query=mysqli_query ($con,"INSERT INTO `srankshk` ( `name`, `relation`, `balance`, `date`, `address`, `pno`, `receiptno`, `grp`) VALUES ( '$name', '$rel', '$bal', '$date', '$addr', '$pno', '$rcpt', 'grp')");
}
?>
</body>
</html>
