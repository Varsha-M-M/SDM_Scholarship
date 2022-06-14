<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>particular</title>
</head>
<body>
<header>
        <p class="headding">Students Eligible for Particular Scholarship</p>
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
    <div class="formbody">
    <form action="redirect_view_particular_scholar.php" method="post">
    <label id="l1">Choose a Scholarship:</label>
    <select name="scholar" id="scholar">
        <option value=13>Fee Concession for Disabels</option>
        <option value=1>Fee Concession for others</option>
        <option value=2>Food and Accomodation cat1</option>
        <option value=3>Food and Accomodation OBC</option>
        <option value=4>Post Matric Disable</option>
        <option value=5>Post Matric for Minority</option>
        <option value=6>Post Matric Labour</option>
        <option value=7>Post Matric SC</option>
        <option value=8>Post Martic ST</option>
        <option value=9>Sakham Disable</option>
        <option value=10>SDME Trust</option>
        <option value=11>SKDRDP</option>
        <option value=12>Top Class Scheme SC</option>
     </select>
      <br>
      <!-- <label id="l1">enter USN</label>
      <input type="text" > -->
      <br>
      <input type="submit" id="submitButton">
      </form>
    </div>
    
</body>
</html>
