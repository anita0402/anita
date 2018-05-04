<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?
mysql_connect("localhost","root","");
mysql_select_db("dbbatch11to1");
$rollno=$name=$class=$address=$city="";
if(isset($_REQUEST["id"]))
{
	 $str="select srollno,sname,sclass,saddress,scity from tbstud where srollno=".$_REQUEST["id"];
	 $rs=mysql_query($str);
list($rollno,$name,$class,$address,$city)=mysql_fetch_row($rs);	 
}
?>
<body>
<form id="form1" name="form1" method="post" action="Code.php?id=<?=$rollno?>">
<input type="hidden" name="id" value="<?=$rollno?>" />
  <table width="80%" border="0" align="center">
    <tr>
      <th scope="row"><div align="right">Name</div></th>
      <td><input name="txtname" type="text" id="txtname" value="<?=$name?>" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">Class</div></th>
      <td><input name="txtclass" type="text" id="txtclass"  value="<?=$class?>" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">Address</div></th>
      <td><input name="txtaddress" type="text" id="txtaddress"  value="<?=$address?>"  /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">City</div></th>
      <td><input name="txtcity" type="text" id="txtcity" value="<?=$city?>"  /></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">
	   <?
	   if(isset($_REQUEST["id"]))
	   {
	   ?>
        <input name="btnupdate" type="submit" id="btnupdate" value="Update" />
		<input name="btncancel" type="submit" id="btncancel" value="Cancel" />
		<?
		}
		else
		{
		?>
		<input name="btnadd" type="submit" id="btnadd" value="Add" />
		<?
		}
		?>
      </div></th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><table width="100%" border="1">
        <tr>
          <th scope="col">Sr.No</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Address</th>
          <th colspan="2" scope="col">Action</th>
          </tr>
		  <?
		  $str="select srollno,sname,sclass,saddress from tbstud order by srollno";
		  $srno=1;
		  $rs=mysql_query($str);
		  while($row=mysql_fetch_array($rs))
		  {
		  ?>
        <tr>
          <td><?=$srno++?></td>
          <td><?=$row["sname"]?></td>
          <td><?=$row["sclass"]?></td>
          <td><?=$row["saddress"]?></td>
          <td><a href="Desg.php?id=<?=$row["srollno"]?>">Select</a></td>
          <td><a href="Code.php?mode=delete&id=<?=$row["srollno"]?>">Delete</a></td>
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
