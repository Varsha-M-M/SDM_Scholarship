<?php
$conn = mysqli_connect("localhost","root","","projects") or die("unsucessful");

$var = $_POST['scholar'];

$sql2 = "SELECT student.usn,student.fname,student.mname,student.lname
          FROM student
          JOIN student_scholarship WHERE
          student.usn = student_scholarship.usn AND 
         student_scholarship.scholarship_id = {$var}";
          
$result2 = mysqli_query($conn,$sql2);

 ?>
 
<html>
<link href="registration.css" rel="stylesheet" type="text/css"/>
<body>
<div class="headline">
  <h1>Registration
  <div class="btn">
  <a href="#">Home</a>
                    <a href="login.php">Login</a>
                   <a href="about.php">About</a>
                   <a href="contact.php">Contact</a>
  </div></h1>
  </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>USN</th>
                    <th>STUDENT NAME</th>
                </tr>
                </thead>
               <?php

while($row2= mysqli_fetch_assoc($result2))
{?>
<tbody>
<tr>
                <td><?php  echo $row2['usn'];  ?></td>
                <td><?php echo $row2['fname']."   "; echo $row2['mname']."   ";  echo $row2['lname']."   "; ?></td>
                </tr>
<?php
}
?>
</tbody>
</table>
</div>
</body>
</html>

<style>
    body{
    margin: 0;
    font-weight: 100;
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("https://cache.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/3332/2018/8/9/SDM-College-of-Engineering-and-Technology-Dharwad-7.jpg");
    background-size: cover;
}
.headline{

    position:fixed;
    max-width: 100%;
    width: 100%;
    top:0px;
    height: 100px;
    background:black ;
    margin: 0px;
    border: 0px;
    padding: 0px;
    color:white;
    font-family:Verdana,sans-serif;
    z-index: 1;
    }
    .btn{
        float: right;
        margin: 10px;
     }
     input[type],select{
        min-width: 2%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 15px;
        background-color: rgba(231, 225, 225, 0.658);
        }
    .container{
        position:absolute;
        top:70%;
        left:50%;
        transform: translate(-50%,-50%);
       
    }
    table{
       
        width:800px;
        border-color: rgba(255, 255, 255, 0.2);
        color: #fff;
    }
    th,td{
        padding: 15px;
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;

    }
    th{
        text-align: left;
    }
    thead{
        background-color: rgb(41, 40, 40);
    }
</style>


