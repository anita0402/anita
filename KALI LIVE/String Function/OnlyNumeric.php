<html>
<head>
<style type="text/css">
 em
{
	color:red;
	display:none;
	margin-right:10px;	
}
</style>
<script language="javascript">
function RequiredField(ctrid,errid,errmsg,starid)
{
	var value=document.getElementById(ctrid).value;
	document.getElementById(errid).innerHTML="";		
	document.getElementById(starid).style.display="none";
	if(value=="")
	{
	document.getElementById(errid).innerHTML=errmsg;		
	document.getElementById(starid).style.display="block";
	}
}
function OnlyNumeric(ctrid,errid,errmsg)
{
	var value=document.getElementById(ctrid).value;
	if(value=="")return;
	document.getElementById(errid).innerHTML="";		
	var VData="0987654321";
	for(i=0;i<value.length;i++)
	{
		var ch=value.charAt(i);
		if(VData.indexOf(ch)==-1)
		{
			document.getElementById(errid).innerHTML=errmsg;
			return;
		}
	}
		
}
function IsValid()
{
	RequiredField("txtage","errage","Age is required","agestar");
	RequiredField("txtphno","errphno","Phone is required");
	RequiredField("txtmob","errmobno","Mob is required");
	OnlyNumeric("txtage","errage","Only Numeric value allowed");
	OnlyNumeric("txtphno","errphno","Only Numeric value allowed");
	OnlyNumeric("txtmob","errmobno","Only Numeric value allowed");
} 

</script>
</head>
<body>
<table align="center">
<tr>
<td>Enter Age</td>
<td><em id="agestar">*</em><input id="txtage" /><span id="errage"></span></td>
</tr>
<tr>
<td>Enter Phone</td>
<td><em>*</em><input id="txtphno" /><span id="errphno"></span></td>
</tr>
<tr>
<td>Enter Mob</td>
<td><em>*</em><input id="txtmob" /><span id="errmobno"></span></td>
</tr>
<tr>
<td><input type="Button" value="Submit" onclick="IsValid()" /></td>
</tr>

</table>
</body>
</html>