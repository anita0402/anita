<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css.map" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap3.min.css" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<style>
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
           box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
	width:100% !important;
	border:none !important;
	text-transform:capitalize;
}
.form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
    text-transform: capitalize;
    font-size: 20px;
    font-weight: normal;
}
</style>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-xs-12">
<br />


<form class="form-horizontal" action="insert.php" method="post"><fieldset class="scheduler-border"><legend class="scheduler-border"><h2>loginform</h2></legend>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">firstname:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the first name" type="text" name="fstnme" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">lastname:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the last name" type="text" name="lstnme" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">father's name:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the father's name" type="text" name="fname" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">mother's name:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the mother's name" type="text" name="mname" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">email:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the email" type="text" name="email" /></div>
</div>

<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">phone no:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the phone no" type="text" name="pno" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">address:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="address" type="text" name="address" /></div>
</div>
<div class="form-group">
<label for="inputuser" class="control-label col-sm-2">password:</label>
<div class="col-sm-10">
<input class="form-control" placeholder="enter the password" type="text" name="password" /></div>
</div>
<label for="inputuser" class="control-label col-sm-2" >selected image:</label>
<input type='file'  name="file1" id="file1"/>
<div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<button type="submit" class="btn btn-default" name="btn">submit</button>

</div>
</div>
</fieldset>
</form>

</div>

</div>

</div>
</body>
</html>
