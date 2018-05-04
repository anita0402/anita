<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?
mysql_connect("localhost","root","");
mysql_select_db("dbbatch11to1");
?>

<body>
<form action="Code.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="80%" border="0" align="center">
    <tr>
      <th scope="row"><div align="right">Name</div></th>
      <td><input name="txtname" type="text" id="txtname" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">Class</div></th>
      <td><input name="txtclass" type="text" id="txtclass" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">Address</div></th>
      <td><input name="txtaddress" type="text" id="txtaddress" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">Image</div></th>
      <td><input name="file1" type="file" id="file1" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">
        <input name="btnadd" type="submit" id="btnadd" value="Add" />
      </div></th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><table width="100%" border="1">
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Address</th>
          <th scope="col">Rollno</th>
        </tr>
		<?
		$str="select * from tbstudent";
		$rs=mysql_query($str);
		while($row=mysql_fetch_array($rs))
		{
		?>
        <tr>
          <td><img src='images/<?=$row["SImage"]?>' width="150px" height="150px" /></td>
          <td><?=$row["SName"]?></td>
          <td><?=$row["SClass"]?></td>
          <td><?=$row["SAddress"]?></td>
          <td><?=$row["SRollno"]?></td>
        </tr>
		<?
		}
		?>
      </table></th>
    </tr>
  </table>
</form>
</body>
</html>
