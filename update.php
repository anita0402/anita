<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php require('db.php');
<?php
ob_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
if (isset($_POST['update']))
{
    $name=$_REQUEST['fstnme'];
    $lstnme=$_REQUEST['lstnme'];
    $fname=$_REQUEST['fname'];
    $mname=$_REQUEST['mname'];
    $email=$_REQUEST['email'];
    $pno=$_REQUEST['pno'];
    $address=$_REQUEST['address'];
    $password=$_REQUEST['password'];
    $image=$_REQUEST['image'];
    
echo "<pre>";
print_r($_REQUEST);
echo $query=mysqli_query($con,"UPDATE loinform SET firstname='$name', lastname='$lstnme', fathername='$fname', mothername='$mname', 
email='$email', phoneno='$pno', address='$address', password='$password', image='$image' WHERE id='$id'");



if($query)
{
$msg="successfully updated!!";
header('location:dashboard.php');
}
}

}
ob_end_flush();
?>

<?php
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query2="select* from loinform where id='$id'";
$result=mysqli_query($con, $query2);
while($row=mysqli_fetch_array($result))
{
?>


<form class="form-horizontal" method="post" enctype="multipart/form-data"><fieldset class="scheduler-border"><legend class="scheduler-border"><h2>loginform</h2></legend>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">firstname:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the first name" type="text" name="fstnme"value="<?php echo $row['firstname']; ?>" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">lastname:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the last name" type="text" name="lstnme"value="<?php echo $row['lastname']; ?>" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">father's name:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the father's name" type="text" name="fname"value="<?php echo $row['fathername']; ?>" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">mother's name:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the mother's name" type="text" name="mname" value="<?php echo $row['mothername']; ?>"/></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">email:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the email" type="text" name="email"value="<?php echo $row['email']; ?>" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">phone no:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the phone no" type="text" name="pno" value="<?php echo $row['phoneno']; ?>"/></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">address:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="address" type="text" name="address" value="<?php echo $row['address']; ?>" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">password:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the password" type="text" name="password" value="<?php echo $row['password']; ?>"/></div>
</div>

<input type="submit" name="update" value="update" />

</div>
</div>
</fieldset>
</form>

<?php
}
}
?>
</body>
</html>
