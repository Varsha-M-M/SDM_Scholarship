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

?>


<html>
<body>

<div>
<label><?php echo $scholarship; ?></label>
</div>
    <div class="container">
        <table>
<?php

while($row = mysqli_fetch_assoc($result))
{
    $var = $row['COLUMN_NAME'];
   
    ?>
   
  <div>
      <tr>
      <td> <?php echo $row['COLUMN_NAME'];?>   </td>
      <td>  <?php  echo $row2[$var]; ?> </td>
      <br>
      </tr>
  </div>
  
 <?php
 

}?> 


?>
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
        top:50%;
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
