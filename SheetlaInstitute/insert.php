<?php
$con=mysqli_connect('localhost','root','','sheetla_db');
echo "successfully connected";
?>
<?php
if(isset($_REQUEST['submit']))
{
echo "<pre>";
print_r($_REQUEST);



$a=$_REQUEST['Enroll'];
$b=$_REQUEST['name'];
$c=$_REQUEST['f_name'];
$d=$_REQUEST['m_name'];
$e=$_REQUEST['dob'];
$f=$_REQUEST['qual'];
$h=$_REQUEST['m_no'];
$i=$_REQUEST['h_m_no'];
$j=$_REQUEST['mail'];
$k=$_REQUEST['vill'];
$l=$_REQUEST['p_vill'];
$m=$_REQUEST['teh'];
$n=$_REQUEST['distt'];
$o=$_REQUEST['state'];
$p=$_REQUEST['p_code'];
$q=$_REQUEST['v_D_M'];
$r=$_REQUEST['categ'];
$s=$_REQUEST['Relig'];
$t=$_REQUEST['adhar'];
$u=$_REQUEST['nation'];
$v=$_REQUEST['duration'];
$w=$_REQUEST['T_fees'];
$x=$_REQUEST['course'];
$g=$_REQUEST['gend'];
// $y=$_REQUEST['Upload_image'];
// $z=$_REQUEST['Upload_Sign'];
// $aa=$_REQUEST['Criteria_1'];
// $ab=$_REQUEST['Criteria_2'];
// $ac=$_REQUEST['Criteria_3'];



 $query=mysqli_query($con,"INSERT INTO `admission_form` (`Id`, `Enrollment_No`, `Name`, `Father_Name`, `Mother_Name`, `DOB`, `Qualification`, `Mobile_No`, `Home_Mobile_No`, `E_Mail_Id`, `Village`, `P_O`, `Tehsil`, `Distt`, `State`, `Pin_Code`, `Visible_Distinguish_Mark`, `Category`, `Religion`, `Adhaar_Card_No`, `Nationality`, `Duration`, `Total_Fees`, `Course_Name`, `Gender`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q ', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$g')");


// $query=mysqli_query($con,"INSERT INTO `admission_form` (`Id`, `Enrollment_No`, `Name`, `Father_Name`, `Mother_Name`, `DOB`, `Qualification`, `Mobile_No`, `Home_Mobile_No`, `E_Mail_Id`, `Village`, `P_O`, `Tehsil`, `Distt`, `State`, `Pin_Code`, `Visible_Distinguish_Mark`, `Category`, `Religion`, `Adhaar_Card_No`, `Nationality`, `Duration`, `Total_Fees`, `Course_Name`, `Gender`, `Upload_image`, `Upload_Sign`, `Criteria_1`, `Criteria_2`, `Criteria_3`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q ', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$g' , '$y', '$z', '$aa', '$ab', '$ac')");

 
echo "Added successfully ";


}
?>