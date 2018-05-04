<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost", "root","","bhumti");
?>
<table border="1">

<?php
$query="select * from personal";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($result))
{
?>
<tr>
<td>
<?php echo $row["Name"];?>
</td>
<td><?php echo $row["fname"];?></td>
<td><?php echo $row["mname"];?></td>
<td><?php echo $row["dob"];?></td>
<td><?php echo $row["occupation"];?></td>
<td><?php echo $row["category"];?></td>
<td><?php echo $row["addhar_card_no"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["phone_no"];?></td>
<td><?php echo $row["address"];?></td>
<td><?php echo $row["sex"];?></td>
<td><?php echo $row["sub_category"];?></td>
<td><a href="update.php?id=<?php echo $row["id"];?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row["id"];?>">delete</a></td>


</tr>
<?php
}
?>
</body>
</html>
