<html>
<head>
<script language="javascript">
function Convert()
{
var str=document.getElementById("txtname").value;
document.getElementById("length").innerHTML=str.length;	
document.getElementById("ucase").innerHTML=str.toUpperCase();	
document.getElementById("lcase").innerHTML=str.toLowerCase();	
document.getElementById("rev").innerHTML=Reverse(str);
document.getElementById("pall").innerHTML=IsPallindrome(str);
}
function IsPallindrome(str)
{
	var temp=Reverse(str);
	if(temp==str)return("Pallindrome");
	else return("Not Pallindrome");
}
function Reverse(str)
{
	var temp="",i;
	for(i=str.length-1;i>=0;i--)
	{
		temp=temp+str.charAt(i);
	}
	return(temp);
}
</script>
</head>
<body>
<table align="center">
<tr>
<th align="right">Enter Any String</th>
<td><input id="txtname" /></td>
</tr>
<tr>
<th align="right">Length</th>
<td id="length"></td>
</tr>
<tr>
<th align="right">UpperCase</th>
<td id="ucase"></td>
</tr>
<tr>
<th align="right">LowerCase</th>
<td id="lcase"></td>
</tr>
<tr>
<th align="right">Reverse</th>
<td id="rev"></td>
</tr>
<tr>
<th align="right">IsPallindrome</th>
<td id="pall"></td>
</tr>

<tr>
<th align="right"><input type="Button" value="Convert" onclick="Convert()" /></th>
</tr>
</table>
</body>
</html>