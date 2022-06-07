<?php
$conn = mysqli_connect("localhost","root","","projects") or die("connection refused");

$username = $_POST['usn'];

$password = $_POST['password'];

$sql  = "SELECT * FROM admin";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    if($username == $row['username'] && $password == $row['password']){
        ?>
         <form> 
             <H1>U HAVE SUCCESFULLY LOGGED IN</H1>
         </form>
   <?php
   header('Location: http://Localhost/project2/adm_button.php');
    }
   else{
       ?>
    <form> 
    <H1>INCORRECT CREDENTIALS</H1>
</form>
  <?php
 header('Location: http://Localhost/project2/admin_login.php');  
}
    }


?>