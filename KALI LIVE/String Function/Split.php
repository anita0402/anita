<html>
<head>
<script language="javascript">
function RequiredField(name)
{
	document.getElementById("errname").innerHTML=""; 
	if(name=="")
document.getElementById("errname").innerHTML="Please Enter Name ";

}
 function Split1()
{
	var name=document.getElementById("txtname").value;
	RequiredField(name);
	var pos1,pos2;
	var fname,mname,lname;
	fname=mname=lname="";
	name=name.toLowerCase();
	pos1=name.indexOf(" ");
	if(pos1>-1)
	{
		pos2=name.indexOf(" ",pos1+1);
		if(pos2>-1)
		{
			//three words
			fname=name.substring(0,pos1);
		mname=name.substring(pos1+1,pos2);
		lname=name.substring(pos2+1);
		}
		else
		{
			//two words
			fname=name.substr(0,pos1);
			lname=name.substr(pos1+1);
		}
	}
	else
	{
		//one word	
		fname=name;
	}
	document.getElementById("fname").innerHTML=UCFirst(fname);		                   document.getElementById("mname").innerHTML=UCFirst(mname);	
	document.getElementById("lname").innerHTML=UCFirst(lname);	
}
function UCFirst(name)
{
	if(name.length==0)return("");
	name=name.charAt(0).toUpperCase()+name.substr(1);
	return(name);
}
function Split2()
{
	var name=document.getElementById("txtname").value;
	RequiredField(name);
	var fname,mname,lname;
	var arr=name.split(" ");
	fname=arr.length>0?arr[0]:"";
	mname=arr.length>1?arr[1]:"";
	lname=arr.length>2?arr[2]:"";
	document.getElementById("fname").innerHTML=fname;	document.getElementById("mname").innerHTML=mname;	
	document.getElementById("lname").innerHTML=lname;	

}
</script>
<style type="text/css">
 span
{
	color:red;
}
</style>
</head>
<body>
<table align="center">
<tr>
<td>Enter Name</td>
<td><input id="txtname" /><span id="errname"></span></td>
</tr>
<tr>
<td><input type="button" value="Split" onclick="Split1()" /></td>
<td><input type="button" value="Split" onclick="Split2()" /></td>
</tr>
<tr>
<td>First Name</td>
<td id="fname"></td>
</tr>
<tr>
<td>Middle Name</td>
<td id="mname"></td>
</tr>
<tr>
<td>Last Name</td>
<td id="lname"></td>
</tr>

</table>
</body>
</html>