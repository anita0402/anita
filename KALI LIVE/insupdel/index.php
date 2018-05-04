

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<div class="display">
<form action="insert.php" method="post" name="insertform" id="insertform" enctype="multipart/form-data">

  <table>
  <tr>
  <td>Select a file to upload</td>
  <td><input name="file1" type="file" id="file1" /></td>
  </tr>
  <tr>
    <td>USER NAME :</td>
	
    <td><input type="text" name="username" required placeholder="Enter your name" id="inputid"/></td>
  </tr>
  <tr>
    <td>EMAIL ID :</td>
    <td><input type="email" name="usermail" required placeholder="Enter your Email" id="inputid" /></td>
  </tr>
  <tr>
    <td>MOBILE NUMBER :</td>
    <td><input type="text" name="usermobile" required placeholder="Enter your mobile number" id="inputid" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="send" value="Submit" id="inputid1"  /></td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>
</div>
<?php include('view.php'); ?>
</body>
</html>

