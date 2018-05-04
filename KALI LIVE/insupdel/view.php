<html>
<body>
<div class="viewrecords">
<table>
<tr>
<th>id</th>
<th>Profile Pic</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include('db.php');
$select=mysql_query("select id, uimage, username, emailid, mobileno, created from sample");
;

while($query2=mysql_fetch_array($select))
{
?>
<tr>
<td><?=$query2["id"]?></td>
<td><img src='images/<?=$query2["uimage"]?>' width="100" height="100" /></td>
<td><?=$query2["username"]?></td>
<td><?=$query2["emailid"]?></td>
<td><?=$query2["mobileno"]?></td>
<td><?=$query2["created"]?></td>
<td><a href="edit.php?id=<?=$query2["id"]?>">Edit</a></td>
<td><a href="delete.php?id=<?=$query2["id"]?>">Delete</a></td>

</tr>
<?php
		}
		?>

</table>
</div>
</body>
</html>