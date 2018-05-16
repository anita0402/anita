<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<form method="post">
<input type="file" name="img" />
<button type="submit">button</button>
</form>
<?php
@$a=$_REQUEST['img'];
if ($_REQUEST)
{
for($i=0; $i<=10; $i++)
echo "<img src='images/$a'>";
}

?>
<?php
$a=array("I","II","III","IV","V","VI","VII","VIII","IX","X");
$arrlength = count($a);
for($i=0; $i<=9; $i++)
{
print "$a[$i]<br>";
}

?>
<?php
echo date('l jS \of F Y h:i:s A');
echo date('Y/m/d H:i:s');
echo "<br>";
echo date('I');
?><hr />
<form>
<input type='text' name='abc'>
<button type="submit" name="btn">button</button>
</form>
<?php
$a=$_REQUEST["abc"];
if(isset($_REQUEST['btn']))
{
echo $_REQUEST['btn'];
}

for($i=0; $i<=$a; $i++)
{
echo "$i<br>";
}
?>
</body>
</html>
