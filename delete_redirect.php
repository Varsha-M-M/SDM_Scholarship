
<?php

$usn = $_POST['usn'];

?>

<?php

$conn = mysqli_connect("localhost","root","","projects") or die("connection refused");

$sql = "DELETE FROM student WHERE usn ='$usn' ";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo "YOUR  ACCOUNT IS  DELETED";
}


?>