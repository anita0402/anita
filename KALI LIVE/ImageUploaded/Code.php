<?
//echo "<pre>";
//print_r($_REQUEST);
//print_r($_FILES);
mysql_connect("localhost","root","");
mysql_select_db("dbbatch11to1");
$name=$_REQUEST["txtname"];
$class=$_REQUEST["txtclass"];
$address=$_REQUEST["txtaddress"];
$image=$_FILES["file1"]["name"];
if(isset($_REQUEST["btnadd"]))
{
	 $str="insert into tbstudent (sname,sclass,saddress,simage) values('$name','$class','$address','$image')";
	 if(move_uploaded_file($_FILES["file1"]["tmp_name"],"images/$image"))
	 {
	 	 mysql_query($str);
//		 echo "Record saved";
	}
}
header("location:Desg.php");
?>