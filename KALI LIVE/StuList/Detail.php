
<?
$id=isset($_REQUEST["id"])?$_REQUEST["id"]:$id;

$str="select  * from tbstud where srollno=$id";
echo $str;
$rs=mysql_query($str);
list($r,$n,$c,$a,$dob)=mysql_fetch_row($rs);
$str="select DOT,PHP,HTML,MySQL,(PHP+HTML+MySQL) as Total,(PHP+HTML+MySQL)/3 as Per from tbmarks where srollno=$id";
$rs=mysql_query($str);
$trec=mysql_num_rows($rs);
?>

<form name="form1" method="post" action="">
  <table width="98%" border="0">
    <tr>
      <td>Name</td>
      <td><?=$n?></td>
      <td>Class</td>
      <td><?=$c?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?=$a?></td>
      <td>DOB</td>
      <td><?=$dob?></td>
    </tr>
    <tr>
      <td>Rollno</td>
      <td><?=$r?></td>
      <td>No Of Test </td>
      <td><?=$trec?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><table width="100%" border="1">
        <tr>
          <th scope="col">Sr.No</th>
          <th scope="col">DOT</th>
          <th scope="col">PHP</th>
          <th scope="col">HTML</th>
          <th scope="col">MySQL</th>
          <th scope="col">Total</th>
          <th scope="col">%Age</th>
          <th scope="col">Grade</th>
        </tr>
		<?
		$srno=1;
		while($row=mysql_fetch_array($rs))
		{
		?>
        <tr>
          <td><?=$srno++?></td>
          <td><?=$row["DOT"]?></td>
          <td><?=$row["PHP"]?></td>
          <td><?=$row["HTML"]?></td>
          <td><?=$row["MySQL"]?></td>
          <td><?=$row["Total"]?></td>
          <td><?=$row["Per"]?></td>
          <td><?=Grade(round($row["Per"]))?></td>
        </tr>
		<?
		}
		function Grade($per)
		{
			 if($per>=80)return("S");
			 else if($per>=75)return("A");
			 else if($per>=70)return("B");			 
			 else if($per>=60)return("C");			 			 
			 else if($per>=50)return("D");			 			 
			 else return("F");			 
		}
		?>
      </table></td>
    </tr>
  </table>
</form>
