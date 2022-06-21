<?php

 
$usn = $_POST['usn'];


?>

<?php

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

           



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body>
<header>
        <p class="headding">Eligible Scholarships</p>
                <nav>
                    <ul class="nav-links">
                        <li><a href="input1.php">Home</a></li>
                        <li><a href="signin.php">Sign-in</a></li>
                        <li><a href="ligin.php">Login</a></li>
                        <li><a href="about.php">About-us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
    </header>
    <table class="content-table">
        
        <thead>
                <tr>
                <th>NAME OF THE SCHOLARSHIP</th>
                    <th>LINK</th>
                </tr>
            </thead>
            <tbody>
           <?php
           
           
           if(mysqli_num_rows($result) > 0){
              while( $row = mysqli_fetch_assoc($result))
              {?>

            <tr>
                <td><?php echo $row['name'];?></td>
                    <td><?php echo "hello"; ?></td>
            </tr>


            <?php
            }
           }?>
</tbody>
          
       
        
        </table>
    
</body>
</html>








    <!-- <table class="container-table">
        
            <thead>
                <tr>
                    <th>NAME OF THE SCHOLARSHIP</th>
                    <th>LINK</th>
                </tr>
            </thead>
            <tbody>
          <?php
            if(mysqli_num_rows($result) > 0){
               while( $row = mysqli_fetch_assoc($result))
               {?>
                   <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo "hello"; ?></td>
                </tr>
            </tbody>
               <?php
            }
           }?>
               
            
            
        </table>
    
    
</body> 
</html>-->