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
<table border="1">
<tr><th>image</th><th>signature</th><th>principal signature</th><th>parent signature</th><th>smc signature</th>
<th>edit</th><th>delete</th>
</tr>
<?php
$query="select * from upload";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>

<tr>
<td><img src='images/<?=$row["image"]?>' width="150px" height="150px" /></td>
<td><img src='images/<?=$row["signature"]?>'width="150px" height="150px"/></td>
<td><img src='images/<?=$row["principal_sign"]?>'width="150px" height="150px"/></td>
<td><img src='images/<?=$row["parent_sign"];?>'width="150px" height="150px"/></td>
<td><img src='images/<?=$row["smc_sign"];?>'width="150px" height="150px"/></td>
<td><a href="upload_up.php?id=<?php echo $row["id"];?>">Edit</a></td>
<td><a href="upload_del.php?id=<?php echo $row["id"];?>">delete</a></td>
</tr>

<?php
}
?>
</table>
</body>
</html>
