<?php
echo $uname= $_POST['NAME'];
echo $titile= $_POST['titile'];
echo $message= $_POST['message'];


include_once'../CONNECTIO.PHP';


   $qryyy="INSERT INTO feedback (uname,TITLE,MSG,created,updated) VALUES('$uname','$titile','$message',NOW(),NOW());";

mysqli_query($con,$qryyy);
?>