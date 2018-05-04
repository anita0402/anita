<html>
<head>
<script language="javascript">
function RequiredField(name)
{
	document.getElementById("errname").innerHTML=""; 
	if(name==name+1)
	document.getElementById("errname").innerHTML="Please Enter middle Name ";
	
}
		
function Submit()
{
RequiredField(name);

var firstname=document.getElementById("txt firstname").innerHTML=firstname;
var Middlename=document.getElementById("txt Middlename").innerHTML=Middlename;
var Lastname=document.getElementById("txt Lastname").innerHTML=Lastname;
var city=document.getElementById("txt city").innerHTML=city;
var country=document.getElementById("txt country").innerHTML=country;
var age=document.getElementById("txt age").innerHTML=age;
var phno=document.getElementById("txt phno").innerHTML=phno;
var mobno=document.getElementById("txt mobno").innerHTML=mobno;
var pincode=document.getElementById("txt pincode").innerHTML=pincode;
var emailid=document.getElementById("txt emailid").innerHTML=emailid;	
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
<td>firstname </td>
<td><input id="txt firstname"/><span id="errname"></span></td>
</tr>
<tr>
<td>MiddleName</td>
<td><input id="txt Middlename"/><span id="errname"></span></td>
</tr>
<tr>
<td>LastName</td>
<td><input id="txt Lastname"></td>
</tr>
<tr>
<td>city</td>
<td><input id="txt city"></td>
</tr>
<tr>
<td>country</td>
<td><input id="txt country"></td>
</tr>
<tr>
<td>age</td>
<td><input id="txt age"></td>
</tr>
<tr>
<td>phno</td>
<td><input id="txt phno"></td>
</tr>
<tr>
<td>mobno</td>
<td><input id="txt mobno"></td>
</tr>
<tr>
<td>pincode</td>
<td><input id="txt pincode"></td>
</tr>
<tr>
<td>email id</td>
<td><input id="txt emailid"></td>
</tr>
<td ><input type="button" value="Submit" onclick="Submit()"/></td>
</body>
</html>