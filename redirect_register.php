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




    $conn = mysqli_connect("localhost","root","","projects") or die("connection refused");

    $querry = "SELECT f.name,f.id
    FROM fee_concession_for_disables f,student s
    WHERE f.disbility_percentage<=s.disability_percentage AND s.usn = '$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM food_and_accomodation_obc f,student s
    WHERE f.caste=s.caste AND f.income>=s.income AND s.usn='$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM  fee_concession_others f,student s
    WHERE f.income>=s.income AND f.caste=s.caste AND s.usn='$usn'   
    
    UNION
    
    SELECT f.name,f.id
    FROM food_and_accomodation_cat1 f,student s
    WHERE f.income>=s.income AND f.prev_percentage<=s.prev_percentage AND f.caste = s.caste AND f.is_hostellite=s.is_hostellite AND s.usn='$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM  post_matric_disable f,student s
    WHERE f.disability_percentage  <= s.disability_percentage    AND s.usn='$usn' 
    
    UNION
    
    SELECT f.name,f.id
    FROM post_matric_labour f,student s
    WHERE f.income>=s.income AND (f.occupation = s.father_occupation OR f.occupation = s.mother_occupation) AND s.usn = '$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM post_matric_sc f,student s
    WHERE f.income>=s.income AND f.caste=s.caste AND s.usn='$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM post_matric_st f,student s
    WHERE f.income>=s.income AND f.caste=s.caste AND s.usn='$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM saksham_disable f,student s
    WHERE f.income>=s.income AND f.first_year=s.is_first AND s.usn='$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM sdme_trust f,student s
    WHERE f.income>=s.income AND f.prev_percentage<=s.prev_percentage AND s.usn='$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM skdrdp f,student s
    WHERE  f.prev_percentage<=s.prev_percentage AND f.is_member=s.is_member  AND s.usn='$usn'
    
    UNION
    
    SELECT f.name,f.id
    FROM top_class_scheme_sc f,student s
    WHERE  f.caste=s.caste  AND s.usn='$usn'
    ";

$result = mysqli_query($conn,$querry) or die("QUERRY UNSUCESSFULL");

if(mysqli_num_rows($result) > 0){
    while( $row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];

       $query2 = "INSERT INTO student_scholarship(scholarship_id,usn) values('{$id}','{$usn}')";

       $result2 = mysqli_query($conn,$query2) or die ("QUERY UNSUCCESS");
    }
}







    header("Location:http://localhost/project2/button.html");
}


   mysqli_close($connection_name);

?>
