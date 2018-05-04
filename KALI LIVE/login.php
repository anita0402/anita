<?php
session_start();
$username = $_POST['name'];
$password = ($_POST['pwd']);
//$mysqli=mysqli_connect('localhost','root','','ci_user');

include_once("Connection.php");
$query = "SELECT * FROM patientinfo WHERE uname='$username' AND pass='$password'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['user_name']=$row['uname'];
		}
		else{
			echo 'false';
		}
?>