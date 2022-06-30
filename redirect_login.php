<?php
$usn = $_POST['usn'];
$password = $_POST['password'];



session_start();

$_SESSION['id'] = $usn;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>Unsuccess</title>
</head>
<body>
    <header>
        <p class="headding">Invalid Password or USN</p>
    </header>
    <ul class="choise">
     <li><span><a href="login.php">Back to Login</a></span></li>
      </ul>
</body>
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


?>

</body>
</html>



