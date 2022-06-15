<?php
$conn = mysqli_connect("localhost","root","","projects") or die("unsucessful");

$var = $_POST['scholar'];

$sql2 = "SELECT student.usn,student.fname,student.mname,student.lname
          FROM student
          JOIN student_scholarship WHERE
          student.usn = student_scholarship.usn AND 
         student_scholarship.scholarship_id = {$var}";
          
$result2 = mysqli_query($conn,$sql2);

 ?>
 
<html>
<link href="registration.css" rel="stylesheet" type="text/css"/>
<body>
<header>
        <p class="headding">Eligible Students</p>
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
            <th>USN</th>
                    <th>STUDENT NAME</th>
            </tr>
            
        </thead>
        
        <tbody>
        <?php

while($row2= mysqli_fetch_assoc($result2))
{?>
            <tr>
            <td><?php  echo $row2['usn'];  ?></td>
            <td><?php echo $row2['fname']."   "; echo $row2['mname']."   ";  echo $row2['lname']."   "; ?></td>
            </tr>
            <?php
}
?>       
           
        </tbody>
    </table>




    
</body>
</html>

