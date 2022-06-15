<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>table</title>
</head>
<body>
    <header>
        <p class="headding">table</p>
                <nav>
                    <ul class="nav-links">
                        <li><a href="input1.php">Home</a></li>
                        <li><a href="signin.php">Sign-in</a></li>
                        <li><a href="ligin.php">Login</a></li>
                        <li><a href="about.php">About-us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
    </header>
    <table class="content-table">
        <thead>
            <tr>
                <th>scholarship id</th>
                        <th>name of scholarship</th>
                        <th>LINK</th>
            </tr>
            
        </thead>
        <tbody>
            <?php
                        
            $conn = mysqli_connect("localhost","root","","projects");
            $sql =  "SELECT * FROM scholarship_details";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result))
            {?>
                <tr>
                <td><?php  echo $row['scholarship_id']; ?></td>
                <td><?php  echo $row['scholarship_name']; ?></td>
                <td> <?php  echo "hello"; ?></td>
                </tr>
                <?php
}
?>
        </tbody>
    </table>
</body>
</html> 
