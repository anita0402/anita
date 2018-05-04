<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','bhumti');
?>
<?php
ob_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
if (isset($_POST['update']))
{
$class=$_REQUEST['class'];
$roll=$_REQUEST['roll_no'];
$sub=$_REQUEST['sub'];

$exam=$_REQUEST['exam'];
$year=$_REQUEST['year'];
$board=$_REQUEST['board'];
$marks=$_REQUEST['marks'];
$per=$_REQUEST['percentage'];
$subjects=$_REQUEST['subjects'];
$grp=$_REQUEST['groups'];
$school=$_REQUEST['school'];
$subj=$_REQUEST['subj'];
echo "<pre>";
print_r($_REQUEST);
echo $query=mysqli_query($con,"UPDATE education SET class='$class', roll='$roll', sub,='$sub', exam='$exam', year='$year', board='$board', marks='$marks', percentage='$per', subjects='$subjects', group='$grp', schoolname='$school', subj='$subj' WHERE id='$id'");

echo $query=mysqli_query($con, "INSERT INTO `education` (`class`, `rollno`, `sub`, `exam`, `year`, `board`, `marks`, `percentage`, `subjects`, `group`, `schoolname`, `subj`) Values ('$class','$sub','$roll','$exam','$year','$board','$marks','$per','$subjects','$grp', '$school', '$subj')");


if($query)
{
$msg="successfully updated!!";
header('location:edu_sel.php');
}
}

}
ob_end_flush();
?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select* from education where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>

<form method="post" name="frm1" enctype="multipart/form-data">

<label for="student_name">class:</label>
	  
      <input type="text" class="form-control" id="class" name="class" value="<?php echo $row['class']; ?>"></div>
	  </div><div class="form-group">
      <label for="student_name">stream:</label>
	  <select class="form-control" id="sel1" name="sub" value="<?php echo $row['sub']; ?>">
		<option>stream</option>
        <option>arts</option>
        <option>commerce</option>
        <option>science</option>
      </select>
	  </div>
   
 
<div class="col-md-6">
<div class="form-group">
      <label for="board_rollno">board roll no:</label>
     <input type="text" class="form-control" id="roll_no" placeholder="roll no" name="roll_no" value="<?php echo $row['rollno']; ?>"  >
    </div>
	<div class="form-group">
      <label for="result">passing exam</label>
      <input type="text" class="form-control" id="" placeholder=" enter the board rollno" name="exam" value="<?php echo $row['exam']; ?>" >
    </div>
	<div class="form-group">
      <label for="result">examing year</label>
      <input type="text" class="form-control" id="" placeholder="" name="year" value="<?php echo $row['year']; ?>">
    </div>
<div class="form-group">
      <label for="result">education board:</label>
      <input type="text" class="form-control" id="" placeholder="" name="board" value="<?php echo $row['board']; ?>">
    </div>
	
<div class="form-group">
      <label for="result">total marks</label>
      <input type="text" class="form-control" id="" placeholder="" name="marks" value="<?php echo $row['marks']; ?>">
    </div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
      <label for="result">percentage:</label>
      <input type="text" class="form-control" id="" placeholder="" name="percentage"  value="<?php echo $row['percentage']; ?>">
    </div>
	<div class="form-group">
      <label for="result">subjects:</label>
      <input type="text" class="form-control" id="" placeholder="" name="subjects" value="<?php echo $row['subjects']; ?>">
    </div>
	<div class="form-group">
      <label for="result">message:</label>
      <input type="text" class="form-control" id="" placeholder="" name="groups" value="<?php echo $row['group']; ?>">
    </div>
	<div class="form-group">
      <label for="result">school name</label>
      <input type="text" class="form-control" id="" placeholder="" name="school" value="<?php echo $row['schoolname']; ?>">
    </div>
	<div class="form-group">
	<label for="sel1">stream:</label>
      <select class="form-control" id="sel1" name="subj" value="<?php echo $row['subj']; ?>">
		        <option></option>
        <option>arts</option>
        <option>commerce</option>
        <option>science</option>
        
      </select></div>
	  <input type="submit" name="update" value="update" />
</form>
<?php
}
}
?>
</body>
</html>
