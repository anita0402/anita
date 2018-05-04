<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class="panel panel-primary">
<div class="panel-heading">Personal Information</div>
<div class="panel-body">
<div class="col-md-12">
<div class="col-md-6">
<div class="form-group">
<form method="post" action="database/database.php" name="frm">
      <label for="student_name"> student name:</label>
      <input type="text" class="form-control" id="std_name" placeholder="Enter Student Name" name="std_name">
    </div>
	<div class="form-group">
      <label for="student_name">father's name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Father's Name" name="ftr_name">
    </div>
	<div class="form-group">
      <label for="student_name">mother's name</label>
      <input type="text" class="form-control" id="mname" placeholder="Enter Mother's Name" name="mtr_name">
    </div>
	<div class="form-group">
      <label for="student_name">date of birth:</label>
<input type="date"  placeholder="dd-mm-yy"   name="dd"  type="date"  class="form-control" />
    </div>
	<div class="form-group">
      <label for="student_name">occupation</label>
      <input type="text" class="form-control" id="occupation" placeholder="Enter occupation" name="occupation"></div>
	  
	  <div class="form-group">
      <label for="sel1">category(with certificate):</label>
      <select class="form-control" id="sel1" name="category">
        <option>general</option>
        <option>sc</option>
        <option>st</option>
        <option>obc</option>
		<option>other category</option>
      </select></div>
	</div>
	
<div class="col-md-6"><div class="form-group">
      <label for="student_name">addhar card no:</label>
      <input type="text" class="form-control" id="adhar_no" placeholder="Enter addhar card no" name="adhar">
    </div>
		<div class="form-group">
      <label for="student_name">e-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email id" name="e_mail">
    </div>
		<div class="form-group">
      <label for="student_name">phone no:</label>
      <input type="text" class="form-control" id="fthr_name" placeholder="Enter phone no" name="pno">
    </div>
		<div class="form-group">
      <label for="student_name">address:</label>
      <input type="text" class="form-control" id="addr" placeholder="Enter the address" name="address">
	  
	  
	  <div class="form-group ">
	  <label for="sel1">sex:</label>
      <select class="form-control " id="sel1" name="male">
        <option class="option">female</option>
        <option>male</option>
        
      </select>
	  </div></div>
	  
	  <div class="form-group">
	  <label for="sel1"> sub category:</label>
      <select class="form-control" id="sel1" name="subcategory">
        <option>irdp</option>
        <option>bpl</option>
        <option>freedom fighter</option>
        <option>x-service man</option>
		
      </select></div>
	  <input type="submit" name="submit"/>
   </form>
  
</div></div></div></div>
</body>
</html>
