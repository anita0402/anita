<?php
$uname= $_POST['username'];
$pass= $_POST['password'];

//echo $uname;
//echo $pass;
//$conn=mysqli_connect("localhost","root","","osmm");
session_start();
if($uname=="" and $pass==""){
$_SESSION['ERROR1']=TRUE;
header('location:../login1.php');
}else{

include_once'../CONNECTIO.PHP';
//echo $con;
 $query="select*from login where USERNAME='$uname' AND PASSWORDD='$pass'; ";
	
	$result=mysqli_query($con,$query);
	//echo $result;
while($data=mysqli_fetch_array($result,MYSQLI_BOTH)){
		$id=$data['id'];
		$USERNAME=$data['USERNAME'];
		$type=$data['TYPEE'];
		//echo "done";
	echo $id;	
	}
echo $USERNAME;
  echo $typee;
	
   	
if($id!=null){
	$_SESSION['logged_in']=true;
	$_SESSION['id']=$id;
	$_SESSION['USERNAME']=$USERNAME;
	if($type=="ADMIN"){
		echo "dfgdlifl";
		header('location:../admin/home.php');
	
	}else{
		echo "cxfgvdcfgd";
		header('location:../home1.php');
	
		
	}
	
}else{
	$_SESSION['NOT_DONE']=true;
	//header('location:login1.php');	
	echo " not logged in";
}



}

?>