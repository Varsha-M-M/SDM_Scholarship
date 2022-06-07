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

while($row =  mysqli_fetch_assoc($result)){
    $var = $row['COLUMN_NAME'];
    $value = $_POST[$var];

    $sql3 = "UPDATE $scholarship
    SET  $var = $value"; 

    $result = mysqli_query($conn,$sql3);
   
}



?>