<?
mysql_connect("localhost","root","");
mysql_select_db("dbbatch11to1");
$name=$_REQUEST["txtname"];
$class=$_REQUEST["txtclass"];
$address=$_REQUEST["txtaddress"];
$city=$_REQUEST["txtcity"];
if(isset($_REQUEST["btnadd"]))
{
	$str="insert into tbstud(sname,sclass,saddress,scity) values('$name','$class', '$address','$city')";
	mysql_query($str);
}
if(isset($_REQUEST["btnupdate"]))
{
//echo "<pre>";
//print_r($_REQUEST);
	$str="update tbstud set sname='$name',sclass='$class', saddress='$address',scity='$city'  where srollno=".$_REQUEST["id"];
  mysql_query($str);

}
else if($_REQUEST["mode"]=="delete")
{
	 $str="delete from tbstud where srollno=".$_REQUEST["id"];
	 mysql_query($str);
}
header("location:Desg.php");
?>