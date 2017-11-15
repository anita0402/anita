<html>
  <head>
    <title>
      abc
    </title>
    </head>
  <body>

    
    
value of a:<input id="first" type="text" onchange="addition()"  />
value of b:<input id="second" type="text" onchange="addition()"  />
value of c:<input id="result" type="text" />

<div id="div"></div>
<script>
function addition()
{
var a = parseInt(document.getElementById('first').value);
var b = parseInt(document.getElementById('second').value);
 var c = a + b;
document.getElementById('result').value=c;
}
</script>
  </body>
</html>
