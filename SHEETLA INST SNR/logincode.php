<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	  session_start();?>
    
    <?php
    if(isset($_POST['Emailid'], $_POST['cpassword'])){
        $email =$_POST['Emailid'];
        $pws = $_POST['cpassword'];
        if(!empty($email) && !empty($pws)){
            $pws = ($pws);
            $query= mysqli_query($con,"SELECT * FROM signup WHERE Emailid = '$email' AND cpassword = '$pws'") or die(mysqli_error());
           $row = mysqli_num_rows($query);
            $data = mysqli_fetch_array($query);
            if($row == 0){
                echo "Invalid pws or email combination";
            } else {
                $_SESSION['id'] = $data['id'];
                $_SESSION['email'] = $data['Emailid'];
                header("location:home.php");
            }
            
        } else {
            echo("Please All fields are required");
        }
    }
    ?> 

</body>
</html>
