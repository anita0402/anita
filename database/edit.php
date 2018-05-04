<?php $con=mysqli_connect('localhost','root','','stud');?>
<?php
ob_start();
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $name=$_POST['name'];
  $cls=$_POST['class'];
  $rollno=$_POST['roll'];
  $ema=$_POST['email'];
  $dbrth=$_POST['dob'];
  
  $query=mysqli_query($con,"UPDATE user SET name='$name',class='$cls', roll='$rollno', email='$ema', dob='$dbrth' WHERE id='$id'");
  if($query)
  {
  $msg="Successfully Updated!!";
  header('Location:student.php');
  }
}
}
ob_end_flush(); 
?>

<?php 
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query="select* from user where id='$id'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<select><option><?php echo $row['name'] ?></option></select>
<form method="post">
<input type="text" name="name" value="<?php echo $row['name'] ?>" />
<input type="text" name="class" value="<?php echo $row['class'] ?>"  />
<input type="text" name="roll" value="<?php echo $row['roll'] ?>"  />
<input type="text" name="email" value="<?php echo $row['email'] ?>" readonly=""/>
<input type="date" name="dob" value="<?php echo $row['dob'] ?>" />
<input type="submit" name="update" value="Edit" />
</form>
<?php } } ?>