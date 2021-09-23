<HTML>
<head>
<link rel="stylesheet" href="css1/Feedback.css">
</head>
<body>
<header>
   <h1> GPS InFo Share </h1>
	<div class="menu">
	<table>
	<tr>
	<td><a href="gallery.php">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><a href="notify.php">Notification</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><a href="loginchecker.php">login Checker</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><a href="feed.php">Feedback</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><a href="events.php"> Events	</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	</table>
	</div>
	</header>
<table style="border:2px solid black;width:70%"><tr style="border:2px solid black"><td >ID</td><td>USER NAME</td>
<td>TITLE</td><td>MESSAGE</td><td>delete</td></tr>
<?php 

$qry="select * from feedback order by updated desc;";

$conn=mysqli_connect("localhost","root","","time");
//echo $conn;
$rslt=mysqli_query($conn,$qry);

while($data=mysqli_fetch_array($rslt,MYSQLI_BOTH)){
	$id=$data['fid'];
	$username=$data['uname'];
	$title=$data['TITLE'];
	$dataa=$data['MSG'];
	
//echo $id;
//echo $username;
//echo $title;
//echo $dataa;


?>

<tr style="border:2px solid black" ><td style="border:2px solid black"><?php  echo $id;?></td><td style="border:2px solid black"><?php  echo $username;?></td>
<td style="border:2px solid black"><?php  echo $title;?></td><td style="border:2px solid black"><?php  echo $dataa;?></td>
<td style="border:2px solid black"><a href="deletFeedback.php?id=<?php echo $id; ?> ">delete</a></td></tr>
<?php }?>

</body>
</html>