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
$nme=$_POST['std_name'];
$fn=$_POST['ftr_name'];
$mn=$_POST['mtr_name'];
$dob=$_POST['dd'];
$occupation=$_POST['occupation'];
$addhar=$_POST['adhar'];
$category=$_POST['category'];
$email=$_POST['e_mail'];
$phone=$_POST['pno'];
$address=$_POST['address'];
$sex=$_POST['male'];
$subcategory=$_POST['subcategory'];
echo "<pre>";
print_r($_REQUEST);

echo $query=mysqli_query($con,"UPDATE personal SET Name='$nme', fname='$fn', mname,='$mn', dob='$dob', occupation='$occupation', addhar_card_no='$addhar', category='$category', email='$email', phone_no='$phone', address='$address', sex='$sex', sub_category='$subcategory' WHERE id='$id'");

$query=mysqli_query($con,"insert into personal(
Name, fname, mname, dob, occupation, category, addhar_card_no, email, phone_no, address, sex, sub_category 
)Values ('$nme','$fn','$mn','$dob','$occupation','$category','$addhar','$email','$phone','$address','$sex','$subcategory')");

if($query)
{
$msg="successfully updated!!";
header('location:view.php');
}
}

}
ob_end_flush();
?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select* from personal where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>
<form method="post" name="frm" enctype="multipart/form-data">
<label for="student_name"> student name:</label>
      <input type="text" class="form-control" id="std_name" placeholder="Enter Student Name" name="std_name"value="<?php echo $row['Name']; ?>">
    </div>
	<div class="form-group">
      <label for="student_name">father's name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Father's Name" name="ftr_name" value="<?php echo $row['fname'];?>">
    </div>
	<div class="form-group">
      <label for="student_name">mother's name</label>
      <input type="text" class="form-control" id="mname" placeholder="Enter Mother's Name" name="mtr_name"  value="<?php echo $row['mname']; ?>">
    </div>
	<div class="form-group">
      <label for="student_name">date of birth:</label>
<input type="date"  placeholder="dd-mm-yy"   name="dd"  type="date"  class="form-control" value="<?php echo $row['dob']; ?>" />
    </div>
	<div class="form-group">
      <label for="student_name">occupation</label>
      <input type="text" class="form-control" id="occupation" placeholder="Enter occupation" name="occupation" value="<?php echo $row['occupation']; ?>"></div>
	  
	  <div class="form-group">
      <label for="sel1">category(with certificate):</label>
      <select class="form-control" id="sel1" name="category" <?php echo $row['category']; ?>">
        <option>general</option>
        <option>sc</option>
        <option>st</option>
        <option>obc</option>
		<option>other category</option>
      </select></div>
	</div>
	
<div class="col-md-6"><div class="form-group">
      <label for="student_name">addhar card no:</label>
      <input type="text" class="form-control" id="adhar_no" placeholder="Enter addhar card no" name="adhar" value="<?php echo $row['addhar_card_no']; ?>">
    </div>
		<div class="form-group">
      <label for="student_name">e-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email id" name="e_mail" value="<?php echo $row['email']; ?>">
    </div>
		<div class="form-group">
      <label for="student_name">phone no:</label>
      <input type="text" class="form-control" id="fthr_name" placeholder="Enter phone no" name="pno" value="<?php echo $row['phone_no'];?>">
    </div>
		<div class="form-group">
      <label for="student_name">address:</label>
      <input type="text" class="form-control" id="addr" placeholder="Enter the address" name="address" value="<?php echo $row['address']; ?>">
	  
	  
	  <div class="form-group ">
	  <label for="sel1">sex:</label>
      <select class="form-control " id="sel1" name="male" value="<?php echo $row['sex']; ?>">
        <option class="option">female</option>
        <option>male</option>
        
      </select>
	  </div></div>
	  
	  <div class="form-group">
	  <label for="sel1"> sub category:</label>
      <select class="form-control" id="sel1" name="subcategory" value="<?php echo $row['sub_category']; ?>">
        <option>irdp</option>
        <option>bpl</option>
        <option>freedom fighter</option>
        <option>x-service man</option>
		
      </select></div>
	  <input type="submit" name="update" value="update" />
	  </form>

<?php
}
}
?>

</body>
</html>
