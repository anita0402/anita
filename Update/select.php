<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$con=mysqli_connect('localhost','root','','update');
?>
<table border="1">
<?php
$query="select * from student";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{?>
<tr>
<td><?php echo $row["roll"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["email"];?></td>


<td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row["id"];?>">delete</a></td>

</tr>
<?php
}
?>

</body>
</html>