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
if(isset($_REQUEST['btn']))
{
echo "<pre>";
print_r($_REQUEST);
$class=$_REQUEST['class'];
$sub=$_REQUEST['sub'];
$roll=$_REQUEST['roll_no'];
$exam=$_REQUEST['exam'];
$year=$_REQUEST['year'];
$board=$_REQUEST['board'];
$marks=$_REQUEST['marks'];
$per=$_REQUEST['percentage'];
$subjects=$_REQUEST['subjects'];
$grp=$_REQUEST['groups'];
$school=$_REQUEST['school'];
$subj=$_REQUEST['subj'];
echo $query=mysqli_query($con, "INSERT INTO `education` (`class`, `rollno`, `sub`, `exam`, `year`, `board`, `marks`, `percentage`, `subjects`, `group`, `schoolname`, `subj`) Values ('$class','$sub','$roll','$exam','$year','$board','$marks','$per','$subjects','$grp', '$school', '$subj')");
}


?>
</body>
</html>
