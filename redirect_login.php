<?php
$usn = $_POST['usn'];
$password = $_POST['password'];



session_start();

$_SESSION['id'] = $usn;

?>

<html>
    <head>
        <h1>ACKNOWLEDGE</h1>
    </head>

<body>

<?php
$connection = mysqli_connect("localhost","root","","projects") or die("Connection refused");

$sql = "SELECT * FROM student WHERE usn = '$usn' AND password = '$password' ";

$result = mysqli_query($connection,$sql) or die("QUERRY  UNSUCCESFUL!!!");

if(mysqli_num_rows($result) > 0)
{
  while($rows = mysqli_fetch_assoc($result))
  {
      header("Location:http://localhost/project2/button.html");
  }
}



?>

</body>


</html>

