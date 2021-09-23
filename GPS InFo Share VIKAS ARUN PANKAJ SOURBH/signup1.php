<?php
 $name=$_POST['name'];
 $Username=$_POST['Username'];
  $email=$_POST['email'];
   $pass=$_POST['password'];
    $pass2=$_POST['password2'];
	echo $name;
	echo $email;
	echo $Username;
	echo $pass;
	echo $pass2;
	$conn=mysqli_connect("localhost","root","","time");



?>