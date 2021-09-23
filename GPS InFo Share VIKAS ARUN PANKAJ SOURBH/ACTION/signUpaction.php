<?php
$name=$_POST['name'];  
$uname= $_POST['Username'];
$email=$_POST['email'];
$pass= $_POST['password'];
$pass2= $_POST['password2'];
echo $name;
echo $uname;
echo $email;
echo $pass;
echo $pass2;


$qryyy="INSERT INTO login (USERNAME,PASSWORDD,TYPEE,CREATED,UPDATED) VALUES('manish','12345','user',NOW(),NOW());";


$conn=mysqli_connect("localhost","root","","time");
//echo $conn;
    //$query="INSERT INTO  gps  (NAME,USERNAME,EMAIL,PASSWORD,CONFIRM_PASSWORD) VALUES //('$name','$uname','$email','$pass','$pass');";
	
	$result=mysqli_query($conn,$qryyy);
	
	$id=mysqli_insert_id($conn);
	echo $id;
	$qry2="INSERT INTO login_detail(id,NAME,MAIL,CREATED,UPDATED) VALUES($id,'pankaj','123@gmail.com',NOW(),NOW());";

	$result2=mysqli_query($conn,$qry2);
	
	
	
	
?>