<html>
<link href="registration.css" rel="stylesheet" type="text/css"/>
<body>
<header>
        <p class="headding">All Students</p>
        <nav>
            <ul class="nav-links">
                <li><a href="input1.php">Home</a></li>
                <!-- <li><a href="signin.php">Sign-in</a></li>
                <li><a href="ligin.php">Login</a></li> -->
                <li><a href="about.php">About-us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <table class="content-table">
        
            <thead>
            <tr>   
                <th>USN</th>
                <th>NAME</th>
                </tr>
            </thead>
                <tbody>
               
                <?php
                  $conn = mysqli_connect("localhost","root","","projects");

                  $sql = "SELECT * FROM student";

                  $result = mysqli_query($conn,$sql);

                  while($row = mysqli_fetch_assoc($result)){
                      ?>
                         <tr>
                          <td><?php echo $row['usn']; ?></td>
                          <td><?php echo $row['fname']; ?></td>
                          
                      </tr>
    


<?php
}
?>
</tbody>
              
           
            
            </table>
        
</body>
</html>






