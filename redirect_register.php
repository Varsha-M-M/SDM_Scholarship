<?php

print_r($_POST);

$fname = $_POST['fname'];
$mname =  $_POST['mname'];
$lname = $_POST['lname'];
$usn =  $_POST['usn'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$gender = $_POST['Gender'];
$state = $_POST['state'];
$income = $_POST['income'];
$caste = $_POST['caste'];
$prev_percentage = $_POST['prvper'];
$sslc_percentage = $_POST['10per'];
$puc_percentage = $_POST['12per'];
$is_hostellite = $_POST['hostel'];
$is_first = $_POST['1year'];
$is_disable = $_POST['dis'];
$disability_percentage = $_POST['handicap']; 
$father_occupation = $_POST['foccupation'];
$mother_occupation = $_POST['moccupation'];
$is_member = $_POST['smem'];
$is_single_parent = $_POST['1parent'];
$others = 0;

?>

<?php

$connection_name = mysqli_connect("localhost","root","","projects") or die("connection refused");

$querry = "update student SET fname = '{$fname}',mname='{$mname}',lname='{$lname}',mail='{$mail}',phone='{$phone}',gender='{$gender}',
income='{$income}',caste='{$caste}',prev_percentage='{$prev_percentage}',sslc_percentage='{$sslc_percentage}',puc_percentage='{$puc_percentage}',
is_hostellite='{$is_hostellite}',other_scholarship='{$others}',is_first='{$is_first}',is_disable='{$is_disable}',
disability_percentage='{$disability_percentage}',father_occupation='{$father_occupation}',mother_occupation='{$mother_occupation}',
is_member='{$is_member}',is_single_parent='{$is_single_parent}',state='{$state}'
 WHERE usn='$usn' ";
 


$result =  mysqli_query($connection_name,$querry) or die("!!!!QUERRY UNSUCCESFUL");

session_start();

$_SESSION['id'] = $usn;


if($result){
    header("Location:http://localhost/project2/button.html");
}


   mysqli_close($connection_name);

?>