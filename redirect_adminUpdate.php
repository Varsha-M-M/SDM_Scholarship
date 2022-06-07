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

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link href="registration.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <form></form>

<?php

while($row = mysqli_fetch_assoc($result))
{
    $var = $row['COLUMN_NAME'];
   
    ?>
    <!-- <input type = "text" id = "demo">
  <button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>

  -->
  <div>
  <label for="<?php echo $row['COLUMN_NAME'];?>" > <?php echo $row['COLUMN_NAME'];?></label><br>


  <input type="text" value="<?php  echo $row2[$var];?>"   name="<?php echo $row['COLUMN_NAME'];?>">
  <br>
  </div>
  
 <?php
 

}?> 
<div>
<button type="submit"></button>
</div>
</body>
</html>