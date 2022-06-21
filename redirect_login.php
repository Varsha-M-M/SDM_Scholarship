<?php
$usn = $_POST['usn'];
$password = $_POST['password'];



session_start();

$_SESSION['id'] = $usn;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","","projects") or die("Connection refused");

$sql = "SELECT * FROM student WHERE usn = '$usn' AND password = '$password' ";

$result = mysqli_query($connection,$sql) or die("QUERRY  UNSUCCESFUL!!!");


  while($rows = mysqli_fetch_assoc($result))
  {
    if($usn == $rows['usn'] && $password == $rows['password']){
   
    header("Location:http://localhost/project2/button.html");
 }
}

 echo "wrong password";


?>

</body>
</html>


