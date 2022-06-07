<?php
$conn = mysqli_connect("localhost","root","","projects");

$sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'projects';";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
   
    $var = $row['TABLE_NAME'];
    if(!($var == "admin" || $var == "student" || $var == "scholarship_details")){
    $sql2  = "SELECT * FROM $var";

    $result2 = mysqli_query($conn,$sql2);

    while($rows = mysqli_fetch_assoc($result2))
  {
     echo $rows['name'];
     
     echo $rows['id'];
  }
    echo "<br>";
}
}

?>