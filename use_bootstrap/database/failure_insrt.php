<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','bhumti');
echo "successfully connected";
?>
<?php
if(isset($_REQUEST['button']))
{
echo "<pre>";
print_r($_REQUEST);
$roll=$_REQUEST['roll_nos'];
$exam=$_REQUEST['exams'];
$year=$_REQUEST['years'];
$snkay=$_REQUEST['snkay'];
$board=$_REQUEST['boards'];
$school=$_REQUEST['schools'];
$reg=$_REQUEST['reg_no'];
$subje=$_REQUEST['subjects'];

echo $query=mysqli_query ($con,"INSERT INTO `failurestd` ( `roll`, `exam`, `years`, `snkay`, `boards`, `schools`, `regno`, `subj`) VALUES ( '$roll', '$exam', '$year', '$snkay', '$board', '$school', '$reg', '$subje')");
}
?>
</body>
</html>
