<?php  


echo "dfghdxf xkfj jbh ";

echo $id=$_GET['id'];



$qry="delete from feedback where fid=$id";
$conn=mysqli_connect("localhost","root","","time");
//echo $conn;
$rslt=mysqli_query($conn,$qry);
header('location:feed.php');


 ?>