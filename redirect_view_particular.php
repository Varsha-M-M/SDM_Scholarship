<?php
$conn = mysqli_connect("localhost","root","","projects") or die("unsucessful");

$scholarship = $_POST['scholar'];

$sql = "SELECT COLUMN_NAME 
FROM INFORMATION_SCHEMA.COLUMNS
WHERE TABLE_NAME = N'$scholarship' ";

$result = mysqli_query($conn,$sql);

$sql2 = "SELECT * FROM $scholarship";

$result2 = mysqli_query($conn,$sql2);

$row2 = mysqli_fetch_assoc($result2);

?>


<html>
    <head>
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    </head>
<body>
<header>
        <p class="headding"><?php echo $scholarship; ?></p>
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
            <th>Attribute</th>
                    <th>Constraints</th>
            </tr>
            
        </thead>
        
        <tbody>
        <?php

while($row = mysqli_fetch_assoc($result))
{
    $var = $row['COLUMN_NAME'];
   
    ?>
           <tr>
      <td> <?php echo $row['COLUMN_NAME'];?>   </td>
      <td>  <?php  echo $row2[$var]; ?> </td>
      
      </tr>
            <?php
}
?>       
           
        </tbody>
    </table>








<!--  -->
       
</body>
</html>

<style>
    
