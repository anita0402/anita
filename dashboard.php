<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css.map" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap3.min.css" type="text/css" />
</head>

<body>
<?php require('db.php');
require('session.php');
?>
<?php $email=$_SESSION["email"];
?>
<?php $query="select * from loinform where email='$email'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);

?>


<div class="container">
  <p><td><img src='images/<?=$row["SImage"]?>' width="150px" height="150px" /></td></p>
  <p><?php echo $row["firstname"];?></p>            
  <table class="table table-bordered ">
    <thead>
      <tr>
      <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>father's name</th>
          <th>mother's name</th>
          <th>email</th>
          <th>phone no</th>
          <th>address</th>
          <th>password</th>
         
      </tr>
      
    </thead>
    <tbody><td>
    <?php echo $row["id"];?></td>
    <td><?php echo $row["firstname"];?></td>
<td><?php echo $row["lastname"];?></td>
<td><?php echo $row["fathername"];?></td>
<td><?php echo $row["mothername"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["phoneno"];?></td>
<td><?php echo $row["address"];?></td>
<td><?php echo $row["password"];?></td>

    </tbody>
  </table>
</div>



      <tr>
      





<script type="text/javascript" src="js/jquery.min.js"></script>
<script>$(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
};</script>
</body>
</html>


<body>
<form action="UploadContent.php" method="POST" enctype="multipart/form-data">
File:
<input type="file" name="image"> <input type="submit" value="Upload">
</form>
<?php

// connect to database
include("db.php")

// file properties
$file = $_FILES['images']['tmp_name'];

if (!isset($file))
echo "Please select a profile pic";
else
{
$image = addslashes(file_get_content($_FILES['image']['tmp_name']));
$image_name = addslashes($FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);

if ($image_size==FALSE)
echo "That isn't a image.";
else
{
$insert = mysql_query("INSERT INTO content VALUES         ('','','','','','','','','','$image_name','$image',)");
}
}
?>
</body>