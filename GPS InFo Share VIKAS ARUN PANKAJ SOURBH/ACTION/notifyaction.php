<?php
echo $Title= $_POST['Title'];
echo $message= $_POST['message'];


include_once'../CONNECTIO.PHP';


   $qryyy="INSERT INTO notifiication (Title,message,created,updated) VALUES(,'$Title','$message',NOW(),NOW());";

mysqli_query($con,$qryyy);
header("location:../admin/notification.php");
?>