<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
html
{
	background-color:#999999;
}
.Container
{
	 background-color:#FFFFFF;
	 width:800px;
	 height:700px;
	 margin:0px auto;
}
.TopHeader
{
	width:100%;
	height:100px;
	background-color:#990000;
}
.TopMenu
{
	width:100%;
	height:20px;
	border-bottom:solid 2px red;
}
.TopMenu ul
{
	margin:0px;
}
.TopMenu li
{
	display:inline;
}
.TopMenu  #leftmenu
{
 float:left;
}
.TopMenu  #rightmenu
{
 float:right;
}

</style>
<script language="javascript">
function GetDetail(id)
{
	 window.location.href="Desg.php?id="+id;
}
</script>
</head>
<body>
<div class="Container">
<div class="TopHeader"></div>
<div class="TopMenu"><? include("TopMenu.php") ?></div>
<div class="WorkArea"><? include("Detail.php");?></div>
</div>
</body>
</html>

