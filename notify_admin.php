<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>Notify</title>
</head>
<body>
<header>
        <p class="headding">Notify</p>
        <nav>
            <ul class="nav-links">
                <li><a href="input1.php">Home</a></li>
                
                <li><a href="about.php">About-us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <form action="redirect_view_particular_scholar.php" method="post">
    <div class="formbody">
    
    <label id="l1">Notification Type:</label>
    <select name="scholar1" id="scholar1">
        <option value=arrival>Arrival of New Scholarship</option>
        <option value=called>Application Called</option>
        <option value=deadline>Application Deadline</option>
     </select>
      <br>

    <label id="l1">Choose the Scholarship:</label>
    <select name="scholar" id="scholar">
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
        <option value=13>Fee Concession for Disabels</option>
     </select>
      <br>

    <label id="l1">notification message:</label><br>
    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>

      <!-- <label id="l1">enter USN</label>
      <input type="text" > -->
      <br>
      <input type="submit" value="SEND" id="submitButton">
      </form>
    </div>
    </div>

    
    
</body>
</html>

