<html>
<link href="registration.css" rel="stylesheet" type="text/css"/>
<body>
<div class="headline">
  <h1>All Scholarships
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
                    <th>scholarship id</th>
                    <th>name of scholarship</th>
                    <th>LINK</th>
                </tr>
               <?php
$conn = mysqli_connect("localhost","root","","projects");
$sql =  "SELECT * FROM scholarship_details";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{?>
<tr>
    <th><?php  echo $row['scholarship_id']; ?></th>
    <th><?php  echo $row['scholarship_name']; ?></th>
    <th> <?php  echo "hello"; ?></th>
</tr>
<?php
}
?>

              
            </thead>
            <tbody>
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
    height: 90px;
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
    .btn a {
        font-size: medium;
    }
</style>
