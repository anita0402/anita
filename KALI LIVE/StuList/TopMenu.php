<?
mysql_connect("localhost","root","");
mysql_select_db("batch12to1db");
$str="select srollno,sname from tbstud where srollno in(select srollno from tbmarks)";
$rs=mysql_query($str);
echo "<div id='leftmenu'><ul>";
$str="<select style='width:150px' onchange='GetDetail(this.value)' >";
$i=1;
while(list($rollno,$name)=mysql_fetch_row($rs))
{
       if($i==1)$id=$rollno;
    echo "<li><a href='Desg.php?id=$rollno'>$name</a></li> | ";
	if($_REQUEST["id"]==$rollno)
	$str=$str."<option selected value=$rollno>$name</option>";
	else
	$str=$str."<option value=$rollno>$name</option>";
	$i++;
}
$str=$str."</select >";
echo "</ul></div><div id='rightmenu'>";
//echo  htmlentities( $str);
echo  $str;

echo "</div>";
?>