<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registration.css" rel="stylesheet" type="text/css"/>
    <title>Update</title>
</head>
<body>
<header>
        <p class="headding">Particular Scholarship Details</p>
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
    <form action="redirect_view_particular.php" method="post">
    <label id="l1">Choose a Scholarship:</label>
    <select name="scholar" id="scholar">
        <option value="fee_concession_for_disables">Fee Concession for Disabels</option>
        <option value="fee_concession_others">Fee Concession for others</option>
        <option value="food_and_accomodation_cat1">Food and Accomodation cat1</option>
        <option value="food_and_accomodation_obc">Food and Accomodation OBC</option>
        <option value="post_matric_disable">Post Matric Disable</option>
        <option value="post_ matric _for_ minority">Post Matric for Minority</option>
        <option value="post_matric_labour">Post Matric Labour</option>
        <option value="post_matric_sc">Post Matric SC</option>
        <option value="post_matric_st">Post Martic ST</option>
        <option value="saksham_disable">Sakham Disable</option>
        <option value="sdme_trust">SDME Trust</option>
        <option value="skdrdp">SKDRDP</option>
        <option value="top_class_scheme_sc">Top Class Scheme SC</option>
     </select>
      <br>
      <!-- <label id="l1">enter USN</label>
      <input type="text" > -->
      <br>
      <input type="submit" id="submitButton">
      </form>
</body>
</html>
