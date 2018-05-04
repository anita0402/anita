<?php
$con=mysqli_connect("localhost", "root","","anita");
?>
<table border="1">

<?php

$query="select * from abc order by fname asc";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?><br>
<tr>
<td>
<?php echo $row["fname"];?>
</td>
<td>
<?php echo $row["lname"];?>
</td>
<td>
<?php echo $row["email"];?>
</td>
<td>
<?php echo $row["password"];?>
</td>
<td>
<?php echo $row["phoneno"];?>
</td>
</tr>

<?php }?>
</table>