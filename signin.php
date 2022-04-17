<?php
$usn = $_POST['txtname'];
$password = $_POST['txtpassword'];
?>

<html>
    <head>
        <h1>ACKNOWLEDGE</h1>
    </head>

<body>

<?php
$connection = mysqli_connect("localhost","root","","projects") or die("Connection refused");

//$sql = "SELECT * FROM student WHERE usn = '$usn' AND password = '$password' ";

$sql = "insert into student(usn,password) values('{$usn}','{$password}')";

$result = mysqli_query($connection,$sql) or die("QUERRY  UNSUCCESFUL!!!");

if($result)
{
  
  header("Location:http://localhost/project2/registration.php");
}
?>